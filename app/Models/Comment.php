<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // relation with post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
