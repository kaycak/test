<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = array(
            ['name' => 'harry potter', 'start_time' => 1, 'end_time' => 2],
            ['name' => 'forest gump', 'start_time' => 2, 'end_time' => 3],
            ['name' => 'avatar', 'start_time' => 5, 'end_time' => 6],
        );
        DB::table('movies')->insert($movies);
    }
}
