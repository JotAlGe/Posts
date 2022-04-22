<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Like;

class LikePost extends Component
{
    public $like = 0;
    public $fill = 'white';

    public function like(){
        $this->fill = 'red';
        $this->like++;
    }

    
    public function render()
    {
        return view('livewire.like-post');
    }
}
