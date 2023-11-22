<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index", [
            'title' => 'registration',
            'active' => 'registration'
        ]);
    }

    public function store(Request $request)
    {
        $validationDate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);



        User::create($validationDate);
        // session()->flash('success', 'Registration successful!');
        return redirect('/login')->with('success', 'Registration successful!');
    }
}
