<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'main_title' => "Tulisan Aneh",
            'title' => 'Home',
            'active' => 'home'
        ]);
    }
}
