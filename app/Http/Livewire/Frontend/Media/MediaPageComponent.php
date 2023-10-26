<?php

namespace App\Http\Livewire\Frontend\Media;

use Livewire\Component;

class MediaPageComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.media.media-page-component')->layout('layouts.frontend');
    }
}
