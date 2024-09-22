<?php

namespace App\Livewire\Page;

use Livewire\Component;

class Index extends Component
{
    public function clickEvent() {
        dd("Clicked");
    }

    public function render()
    {
        return view('livewire.page.index');
    }
}
