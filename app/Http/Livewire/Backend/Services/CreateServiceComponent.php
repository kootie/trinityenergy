<?php

namespace App\Http\Livewire\Backend\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateServiceComponent extends Component
{
    public $title;
    public $description;

    public function createService()
    {
        $service  = new Service();
        $service->title = $this->title;
        $service->description = $this->description;
        $service->created_by = Auth::user()->id;
        $service->save();
        return redirect()->route('service.management');
    }
    public function render()
    {
        return view('livewire.backend.services.create-service-component')->layout('layouts.backend');
    }
}
