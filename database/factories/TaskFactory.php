<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = DB::table('users')->select('id')->get();
        $admin_ids = DB::table('admins')->select('id')->get();
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'assigned_to_id'=> $this->faker->randomElement($user_ids)->id,
            'assigned_by_id'=>  $this->faker->randomElement($admin_ids)->id
        ];
    }
}
