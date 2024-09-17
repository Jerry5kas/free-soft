<?php

namespace App\Livewire\Web\Home;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.web.home.index')->layout('layouts.web');
    }
}
