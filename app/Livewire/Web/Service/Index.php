<?php

namespace App\Livewire\Web\Service;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Service')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.web.service.index')->layout('layouts.web');
    }
}
