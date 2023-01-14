<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function ListAll() {
        $admin = Admin::all();
        return response()->json($admin, 200);
    }
}
