<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //singup
    public function singup() {
        return view(view: 'singup');
    }

    public function login() {
        return view(view: 'login');
    }

    public function singup_check(Request $request) {
        //dd($request);
        $valid = $request->validate([
            'name' => 'required|min:8|max:75',
            'email' => 'required|min:8|max:100',
            'password' => 'required|min:8|max:100'
        ]);

        $newuser = new User();
        $newuser->name = $request->input(key:'name');
        $newuser->email = $request->input(key:'email');
        $newuser->password = $request->input(key:'password');
        $newuser->remember_token = $request->input(key:'_token');
        $newuser->save();

        return redirect()->route(route:'homepage');
    }
}
