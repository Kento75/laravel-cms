<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    // 管理者画面トップ
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }
}
