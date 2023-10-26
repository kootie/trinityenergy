<?php

namespace App\Http\Livewire\Frontend\Media;

use Livewire\Component;

class PressReleases extends Component
{
    public function render()
    {
        return view('livewire.frontend.media.press-releases')->layout('layouts.frontend');
    }
}
