<?php

namespace App\Http\Livewire\Frontend\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceDetailsComponent extends Component
{
    public $service;

    public function mount($slug)
    {
        $this->service = Service::where('id', $slug)->first();
    }
    public function render()
    {
        $services = Service::all();

        return view('livewire.frontend.services.service-details-component', [
            'services'=>$services
        ])->layout('layouts.frontend');
    }
}
