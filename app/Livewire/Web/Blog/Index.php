<?php

namespace App\Livewire\Web\Blog;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.web.blog.index')->layout('layouts.web');
    }
}
