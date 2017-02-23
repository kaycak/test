<?php

use Illuminate\Database\Seeder;

class RoomsMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms_movies = array(
            ['room_id' => 1, 'movie_id' => 1],
            ['room_id' => 2, 'movie_id' => 2],
        );
        DB::table('rooms_movies')->insert($rooms_movies);
    }
}
