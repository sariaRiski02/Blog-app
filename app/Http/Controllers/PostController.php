<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }


        return view(
            'posts',
            [
                'main_title' => "All Posts" . $title,
                'title' => 'Posts',
                'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->simplePaginate(7)->withQueryString()
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'post',
            [
                'title' => "single-post",
                'post' => $post
            ]
        );
    }
}
