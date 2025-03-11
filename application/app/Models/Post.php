<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    // These are the fields that can be mass-assigned
    protected $fillable = ['title', 'content', 'user_id', 'is_active'];

    /**
     * Get the user that owns the Post
     */
    public function user(){
        return $this->belongsTo(user::class);
    }

    /**
     * Get the comments for the Post
     */
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
