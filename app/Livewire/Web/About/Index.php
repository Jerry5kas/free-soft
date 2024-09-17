<?php

namespace App\Livewire\Web\About;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.web.about.index')->layout('layouts.web');
    }
}
