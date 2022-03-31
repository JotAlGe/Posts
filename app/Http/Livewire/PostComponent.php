<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    public function render()
    {
        return view('livewire.post-component', [
            'posts' => Post::OrderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
