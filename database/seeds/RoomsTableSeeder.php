<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = array(
            ['name' => 'red'],
            ['name' => 'blue'],
            ['name' => 'green'],
            ['name' => 'yellow'],
        );
        DB::table('rooms')->insert($rooms);
    }
}
