<?php

namespace Modules\Table\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TableDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            RoomsTableSeeder::class,
            GroupsTableSeeder::class,
            TeachersTableSeeder::class,
            LessonsTableSeeder::class,
            TimesTableSeeder::class,
            WeekdaysTableSeeder::class,
            SchedulesTableSeeder::class,

        ]);
    }
}
