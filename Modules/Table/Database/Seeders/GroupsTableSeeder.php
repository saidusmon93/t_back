<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Table\Entities\Group;

class GroupsTableSeeder extends Seeder
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
        $groups = [
            ['name' => "Group 1"],
            ['name' => "Group 2"],
            ['name' => "Group 3"],
            ['name' => "Group 4"],
            ['name' => "Group 5"],
            ['name' => "Group 6"],
        ];
        foreach ($groups as $group) {
            Group::create($group);
        }
    }
}
