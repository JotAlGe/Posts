<?php

namespace App\Http\Livewire;

use App\Models\Post;
use GrahamCampbell\ResultType\Success;
use Livewire\Component;

class FormComponent extends Component
{
    public $post;
    protected $rules = [
        'post' => ['required', 'min:5', 'max:255']
    ];

    protected $messages = [
        'post.required' => 'Debes escribir algo...',
        'post.min' => 'Postea algo con más caracteres...',
        'post.max' => 'El post debe contener menos de 255 caracteres'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // save post
    public function store()
    {
        // validate
        $this->validate();

        Post::create([
            'content' => $this->post,
            'user_id' => auth()->user()->id
        ]);
        $post = new Post;
        $this->reset('post');

        //return dd(auth()->user()->id);
        //session()->flash('success', 'Todo ok');
    }

    public function render()
    {
        return view('livewire.form-component');
    }
}
