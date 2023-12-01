<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('categories', [
            'title' => "Categories",
            'items' => Category::all()
        ]);
    }
}
