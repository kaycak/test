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
            ['number' => 1, 'active' => true],
            ['number' => 2, 'active' => true],
            ['number' => 3, 'active' => true],
        );
        DB::table('chairs')->insert($chairs);
    }
}
