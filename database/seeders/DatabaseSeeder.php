<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory(100)->create();
        \App\Models\User::factory(1000)->create();
        \App\Models\Task::factory(100)->create();
    }
}
