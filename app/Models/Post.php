<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    // protected $fillable = ['title', 'author', 'genre', 'excerpt', 'body'];

    protected $guarded = ['id', 'published_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
