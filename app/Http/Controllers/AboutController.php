<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {

        return view(
            'about',
            [
                'title' => 'About',
                'name' => 'Rizky saria',
                'email' => 'muhammatsaria026@student.unsrat.ac.id',
                'image' => 'ppriski.jpg'
            ]
        );
    }
}
