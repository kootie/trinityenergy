<?php

namespace App\Http\Livewire\Frontend\Media;

use Livewire\Component;

class GalleryComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.media.gallery-component')->layout('layouts.frontend');
    }
}
