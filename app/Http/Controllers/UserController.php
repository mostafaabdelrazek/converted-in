<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function ListAll() {
        $user = User::all();
        return response()->json($user, 200);
    }
}
