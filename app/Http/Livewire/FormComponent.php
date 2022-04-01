<?php

namespace App\Http\Livewire;

use App\Models\Post;
use GrahamCampbell\ResultType\Success;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormComponent extends Component
{

    use WithFileUploads;

    public $photo;
    public $post;
    protected $rules = [
        'post' => ['required', 'min:5', 'max:255'],
        'photo' => ['mimes:jpg, png', 'max:2048']
    ];

    protected $messages = [
        'post.required' => 'Debes escribir algo...',
        'post.min' => 'Postea algo con más caracteres...',
        'post.max' => 'El post debe contener menos de 255 caracteres',
        'photo.max' => 'La imagen es demasiado grande',
        'photo.mimes' => 'La imagen debe ser png o jpg'
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

        $this->reset('post');
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.form-component');
    }
}
