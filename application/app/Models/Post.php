<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    /**
     * Get the user that owns the Post
     */
    public function user(){
        return $tihis->belongsTo(user::class);
    }

    /**
     * Get the comments for the Post
     */
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
