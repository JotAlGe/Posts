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
        
        $likeByUser = Like::where('user_id', $user_id)
                            ->where('post_id', $post_id)
                            ->get();
        
        if($likeByUser->contains('user_id', $user_id)){
            Like::destroy($likeByUser);      
        }else{
            Like::create([
                'user_id' => auth()->user()->id,
                'post_id' => $post_id
            ]);
        }


        #return dd($likeByUser->contains('user_id', $user_id));
        #return dd($likeByUser->contains('post_id', $post_id));
        /* Like::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post_id
        ]);
        
        $likeByUser->delete(); */
    }


    public function render()
    {
        return view('livewire.post-component', [
            'posts' => Post::OrderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
