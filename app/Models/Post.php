<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            'title' => 'Literasi Satu',
            'author' => 'Riski saria',
            'slug' => 'Literasi-satu',
            'genre' => 'fiction',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, modi! Reiciendis voluptatum tenetur inventore error praesentium adipisci id iste sunt, expedita vel voluptatem doloremque. Unde, impedit. Soluta delectus obcaecati cupiditate error. Omnis eum provident aliquam enim? Soluta libero ratione laudantium ipsa corporis, consequatur eum hic quisquam atque laborum, placeat dolorum excepturi nobis a nesciunt! Consectetur ex ipsum dolorem, nam quis eos autem reprehenderit suscipit, iure id inventore voluptates rem unde ea eveniet, maxime veritatis! Sit minus aliquid aut nulla deleniti.'
        ],
        [
            'title' => 'Literasi Dua',
            'author' => 'Rintik Sedu',
            'genre' => 'self Improvement',
            'slug' => 'Literasi-dua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, fugiat?, expedita vel voluptatem doloremque. Unde, impedit. Soluta delectus obcaecati cupiditate error. Omnis eum provident aliquam enim? Soluta libero ratione laudantium ipsa corporis, consequatur eum hic quisquam atque laborum, placeat dolorum excepturi nobis a nesciunt! Consectetur ex ipsum dolorem, nam quis eos autem reprehenderit suscipit, iure id inventore voluptates rem unde ea eveniet, maxime veritatis! Sit minus aliquid aut nulla deleniti.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        return self::all()->firstWhere('slug', $slug);
    }
}
