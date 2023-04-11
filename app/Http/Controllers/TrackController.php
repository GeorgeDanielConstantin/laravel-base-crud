<?php

namespace App\Http\Controllers;
use App\Models\Track;

use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $tracks = Track::limit(20)->get();

        if($request->has('term')){
            $term = $request->get('term');
            $tracks = Track::where('title', 'LIKE', "%$term%")->paginate(10)->withQueryString();
        } else {
            $tracks = Track::paginate(10);
        }

        return view('tracks.index', compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        $data = $request->all();
        $track = new Track;  

         $track->fill($data);

        $track->save();

        return redirect()->route('tracks.show', $track);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        return view('tracks.show', compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        return view('tracks.edit', compact('track'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track)
    {
        $request->validate([
            'title' => 'required|string|max:20',
            'album' => 'nullable|string|max:20',
            'author' => 'required|string|max:20',
            'editor' => 'nullable|string|max:20',
            'length' => 'nullable|date_format:i:s'
        ],
        [
            'title.required' => 'Inserire il titolo',
            'title.string' => 'Necessaria stringa',
            'title.max' => 'Massimo 20 caratteri',
            'album.string' => 'Necessaria stringa',
            'album.max' => 'Massimo 20 caratteri',
            'author.required' => 'Inserire l\'autore',
            'author.string' => 'Necessaria stringa',
            'author.max' => 'Massimo 20 caratteri',
            'editor.string' => 'Necessaria stringa',
            'editor.max' => 'Massimo 20 caratteri',
            'length.date_format' => 'Il formato della durata deve essere di tipo time (00:00)']);
        $data = $request->all();
        $track->update($data);
        
        return redirect()->route('tracks.show', ['track' => $track->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        $track->delete();
        return redirect()->route('tracks.index');
    }
}
