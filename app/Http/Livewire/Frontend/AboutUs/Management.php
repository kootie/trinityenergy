<?php

namespace App\Http\Livewire\Frontend\AboutUs;

use Livewire\Component;

class Management extends Component
{
    public function render()
    {
        return view('livewire.frontend.about-us.management')->layout('layouts.frontend');
    }
}
