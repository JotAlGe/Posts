<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Like;

class LikePost extends Component
{
    public function render()
    {
        return view('livewire.like-post'/* ,[
            'likeCounter' => Like::all()->count()
        ] */);
    }
}
