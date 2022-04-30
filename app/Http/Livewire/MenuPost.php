<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class MenuPost extends Component
{
    public $showMenuPost = false;
    public $id_post;
    public $photo;

    public function delete()
    {
        Post::destroy($this->id_post);

        if ($this->photo != null) {
            Storage::delete($this->photo);
        }

        $this->showMenuPost = false;
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.menu-post');
    }
}
