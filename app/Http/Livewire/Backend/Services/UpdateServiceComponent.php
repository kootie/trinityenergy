<?php

namespace App\Http\Livewire\Backend\Services;

use App\Models\Service;
use Livewire\Component;

class UpdateServiceComponent extends Component
{
    public $title;
    public $description;
    public $service;


    public function mount($service)
    {
      $this->service = Service::where('id', $service)->first();
      $this->title = $this->service->title;
      $this->description = $this->service->description;

    }

    public function updateService()
    {
        $this->service->title = $this->title;
        $this->service->description = $this->description;
        $this->service->update();
        return redirect()->route('service.management');
    }

    public function render()
    {
        return view('livewire.backend.services.update-service-component')->layout('layouts.backend');
    }
}
