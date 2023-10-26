<?php

namespace App\Http\Livewire\Backend\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceComponent extends Component
{
    public $service;

    public function showConfirmationModal($service)
    {
        $this->service = $service;

        $this->dispatchBrowserEvent('confirmation-modal');
    }

    public function actualDelete()
    {
        $service = Service::where('id', $this->service['id'])->first();
        $service->delete();
        $this->dispatchBrowserEvent('confirmation-modal');
        $this->dispatchBrowserEvent('success', ['message'=>'Record has bee deleted']);
    }
    public function render()
    {
        $services = Service::all();
        return view('livewire.backend.services.service-component', [
            'services'=>$services
        ])->layout('layouts.backend');
    }
}
