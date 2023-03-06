<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Table\Entities\Schedule;

class SchedulesTableSeeder extends Seeder
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
        $schedules = [
            ["room_id" => 5, "weekday_id" => 4, "time_id" => 3, "teacher_id" => 2, "group_id" => 2, "lesson_id" => 1],
            ["room_id" => 1, "weekday_id" => 2, "time_id" => 2, "teacher_id" => 1, "group_id" => 5, "lesson_id" => 6],
            ["room_id" => 2, "weekday_id" => 1, "time_id" => 1, "teacher_id" => 3, "group_id" => 6, "lesson_id" => 4],
            ["room_id" => 6, "weekday_id" => 3, "time_id" => 5, "teacher_id" => 4, "group_id" => 1, "lesson_id" => 2],
            ["room_id" => 3, "weekday_id" => 5, "time_id" => 4, "teacher_id" => 5, "group_id" => 3, "lesson_id" => 5],
            ["room_id" => 4, "weekday_id" => 6, "time_id" => 6, "teacher_id" => 6, "group_id" => 4, "lesson_id" => 3],
            ["room_id" => 1, "weekday_id" => 1, "time_id" => 1, "teacher_id" => 3, "group_id" => 4, "lesson_id" => 3],
        ];
        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}
