<?php

namespace App\Http\Livewire\Frontend\AboutUs;

use Livewire\Component;

class WhoWeAreComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.about-us.who-we-are-component')->layout('layouts.frontend');
    }
}
