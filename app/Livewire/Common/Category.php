<?php

namespace App\Livewire\Common;

use Illuminate\Support\Str;
use Livewire\Component;

class Category extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => ['required','unique:categories,name', 'min:3', 'max:60'],
        'email' => ['required', 'email'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        \App\Models\Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        session()->flash('message', 'Category created successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.common.category');
    }
}
