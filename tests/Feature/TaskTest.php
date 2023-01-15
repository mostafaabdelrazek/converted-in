<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_task()
    {
        $user = \App\Models\User::factory()->create();
        $admin = \App\Models\Admin::factory()->create();
        $response = $this->postJson('/api/task', [
            'strTitle' => 'Test Task Title',
            'strDescription' => 'desc.',
            'intUserID' => $user->id,
            'intAdminID' => $admin->id
        ]);
        $response->assertStatus(200);
    }

    public function test_create_task_invalid_params() {
        $response = $this->postJson('/api/task', [
            'strDescription' => '.',
            'intUserID' => 'string',
            'intAdminID' => 'string'
        ]);
        $response->assertStatus(422);
    }
}
