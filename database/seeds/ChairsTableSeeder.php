<?php

use Illuminate\Database\Seeder;

class ChairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chairs = array(
            ['number' => 1, 'room_id' => 1],
            ['number' => 2, 'room_id' => 1],
            ['number' => 3, 'room_id' => 1],
        );
        DB::table('chairs')->insert($chairs);
    }
}
