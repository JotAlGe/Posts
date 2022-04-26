<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Like;

class PostComponent extends Component
{

    public function like($post_id, $user_id)
    {

        $likeByUser = Like::where('user_id', $user_id)
            ->where('post_id', $post_id)
            ->get();

        if ($likeByUser->contains('user_id', $user_id)) {
            Like::destroy($likeByUser);
        } else {
            Like::create([
                'user_id' => auth()->user()->id,
                'post_id' => $post_id,
                'fill' => 1
            ]);
        }
    }


    public function render()
    {
        return view('livewire.post-component', [
            'posts' => Post::OrderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
