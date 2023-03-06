<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Table\Entities\Time;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        $times = [
            ['start_time' => "08:30", 'end_time' => "09:50"],
            ['start_time' => "10:00", 'end_time' => "11:20"],
            ['start_time' => "11:30", 'end_time' => "12:50"],
            ['start_time' => "13:00", 'end_time' => "14:20"],
            ['start_time' => "14:30", 'end_time' => "15:50"],
            ['start_time' => "16:00", 'end_time' => "17:00"],
        ];
        foreach ($times as $times) {
            Time::create($times);
        }
    }
}
