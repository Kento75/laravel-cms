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

    // ユーザー更新(Admin付与)
    public function makeAdmin(User $user)
    {
        $user->role = 'admin';
        $user->save();

        session()->flash('success', 'User made admin successfully.');

        return redirect(route('users.index'));
    }
}
