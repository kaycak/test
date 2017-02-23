<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(RoomsMoviesTableSeeder::class);
        $this->call(ChairsTableSeeder::class);
        $this->call(ChairsActivitesTableSeeder::class);
    }
}
