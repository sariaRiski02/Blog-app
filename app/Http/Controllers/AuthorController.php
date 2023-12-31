<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        return view('authors', [
            'title' => 'author',
            'items' => User::all()
        ]);
    }
}
