<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Table\Entities\Teacher;

class TeachersTableSeeder extends Seeder
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
        $teachers = [
            ['name' => "Teacher 1"],
            ['name' => "Teacher 2"],
            ['name' => "Teacher 3"],
            ['name' => "Teacher 4"],
            ['name' => "Teacher 5"],
            ['name' => "Teacher 6"],
        ];
        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
