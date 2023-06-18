<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\UserController;

class UserTest extends TestCase
{
    //    public function test_show_new_users_records()
    //    {
    //        $users = User::all()->pluck('anonymous');
    //        foreach ($users as $user) {
    //            dump($user);
    //        }
    //    }

    public function test_check_is_controller_creates_user()
    {
        $result = $this->getJson('/api/new-anonymous');
        $this->assertNotNull($result);
    }
}
