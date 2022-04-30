<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuPost extends Component
{
    public $showMenuPost = false;

    public function render()
    {
        return view('livewire.menu-post');
    }
}
