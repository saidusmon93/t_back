<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Table\Entities\Lesson;

class LessonsTableSeeder extends Seeder
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
        $lessons = [
            ['subject' => "Lesson 1"],
            ['subject' => "Lesson 2"],
            ['subject' => "Lesson 3"],
            ['subject' => "Lesson 4"],
            ['subject' => "Lesson 5"],
            ['subject' => "Lesson 6"],
        ];
        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
