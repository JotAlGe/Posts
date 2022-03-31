<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = ['content', 'user_id'];

    // relation with comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relation with likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
