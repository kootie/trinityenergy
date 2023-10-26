<?php

namespace App\Http\Livewire\Frontend\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesPageComponent extends Component
{
    public function render()
    {
        $services = Service::all();

        return view('livewire.frontend.services.services-page-component',[
            'services'=>$services
        ])->layout('layouts.frontend');
    }
}
