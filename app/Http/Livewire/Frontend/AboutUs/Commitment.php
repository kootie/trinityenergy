<?php

namespace App\Http\Livewire\Frontend\AboutUs;

use Livewire\Component;

class Commitment extends Component
{
    public function render()
    {
        return view('livewire.frontend.about-us.commitment')->layout('layouts.frontend');
    }
}
