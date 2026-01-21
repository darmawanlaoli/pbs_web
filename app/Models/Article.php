<?php

// app/Models/Article.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'image', 'meta_keywords', 'user_id'];

    // Membuat slug otomatis saat menyimpan judul
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            $article->slug = Str::slug($article->title);
        });
    }
}


?>
