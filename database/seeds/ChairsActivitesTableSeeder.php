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
        $chairs_activites = array(
            ['movie_id' => 1, 'room_id' => 1, 'chair_id' => 1, 'active' => true],
            ['movie_id' => 1, 'room_id' => 1, 'chair_id' => 2, 'active' => true],
            ['movie_id' => 1, 'room_id' => 1, 'chair_id' => 3, 'active' => true],
        );
        DB::table('chairs_activites')->insert($chairs_activites);
    }
}
