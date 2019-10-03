<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index',compact('user'));
    }
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $result = $request->except('email');
        $user->update($result);
        $user->syncRoles($request->roles);
        return redirect()->route('user.index');
    }
}
