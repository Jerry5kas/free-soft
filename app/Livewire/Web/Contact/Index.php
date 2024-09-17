<?php

namespace App\Livewire\Web\Contact;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.web.contact.index')->layout('layouts.web');
    }
}
