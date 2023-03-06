<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Table\Entities\Weekday;

class WeekdaysTableSeeder extends Seeder
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
        $weekdays = [
            ['name' => "Monday"],
            ['name' => "Tuesday"],
            ['name' => "Wednesday"],
            ['name' => "Thursday"],
            ['name' => "Friday"],
            ['name' => "Sunday"],
        ];
        foreach ($weekdays as $weekday) {
            Weekday::create($weekday);
        }
    }
}
