<?php

namespace App\Http\Livewire\Frontend\WorkWithUs;

use Livewire\Component;

class Testimonials extends Component
{
    public function render()
    {
        return view('livewire.frontend.work-with-us.testimonials')->layout('layouts.frontend');
    }
}
