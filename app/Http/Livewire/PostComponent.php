<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Like;

class PostComponent extends Component
{
    public $fill;
    public function like($post_id, $user_id){
        
        $this->fill = 'red';
        

        Like::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post_id
        ]);

    }
    public function render()
    {
        return view('livewire.post-component', [
            'posts' => Post::OrderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
