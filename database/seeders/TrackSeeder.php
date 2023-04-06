<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Track;
use Faker\Generator as Faker;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){

            $new_track = new Track;


            $new_track->title = $faker->word();
            $new_track->album = $faker->word();
            $new_track->author = $faker->name();
            $new_track->editor = $faker->randomElement(['Sony Music', 'Universal Music', 'Warner Music']);
            $new_track->length = $faker->time('i:s');

            $new_track->save();
        }   
    }
} 