<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text_color',
        'bg_color',
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($category) {
            $posts = Post::all();
            foreach ($posts as $post) {
                $post->categories()->attach($category->id);
            }
        });
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'category_post');
    }
}
