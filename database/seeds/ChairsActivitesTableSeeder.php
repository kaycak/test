<?php

use Illuminate\Database\Seeder;

class ChairsActivitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms_movies_chairs = array(
            ['movie_id' => 1, 'room_id' => 1, 'chair_id' => 1],
            ['movie_id' => 1, 'room_id' => 1, 'chair_id' => 2],
            ['movie_id' => 1, 'room_id' => 1, 'chair_id' => 3],
        );
        DB::table('rooms_movies_chairs')->insert($rooms_movies_chairs);
    }
}
