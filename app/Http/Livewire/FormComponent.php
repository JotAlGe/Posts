<?php

namespace App\Http\Livewire;

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

    public function render()
    {
        return view('livewire.form-component');
    }
}
