<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Table\Entities\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call("OthersTableSeeder");
        $rooms = [
            ['name' => "Room 1"],
            ['name' => "Room 2"],
            ['name' => "Room 3"],
            ['name' => "Room 4"],
            ['name' => "Room 5"],
            ['name' => "Room 6"],
        ];
        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
