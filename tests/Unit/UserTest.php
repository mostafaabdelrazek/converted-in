<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_model()
    {
        $user = User::make([
            'name'=> 'Alex',
            'email' => 'email@email.com'
        ]);
        $this->assertSame($user->name, 'Alex');
        $this->assertSame($user->email, 'email@email.com');
        $this->assertIsString($user->name);
    }

    public function test_user_deletion() {
        $user = User::factory()->create();
        $user = User::first();
        if ($user) {
            $rslt = $user->delete();
        }
        $this->assertTrue($rslt);
    }
}
