<?php

namespace App\Http\Livewire\Backend\ServiceRequest;

use App\Models\ServiceRequest;
use Livewire\Component;

class ServiceRequestComponent extends Component
{
    public $filterTerm = 'new';
    public $serviceDetails;
    public $serviceId;
    public $status;


    public function changeService($filterTerm)
    {
        $this->filterTerm = $filterTerm;
    }

    public function viewShowModal($serviceId)
    {
        $this->serviceDetails = ServiceRequest::where('id', $serviceId)->first();
        $this->dispatchBrowserEvent('show-service-form');
    }

    public function viewEditModal($serviceId)
    {
        $this->serviceId = $serviceId;
        $this->dispatchBrowserEvent('show-edit-form');
    }



    public function updateStatus()
    {
        $inquiry = ServiceRequest::where('id', $this->serviceId)->first();
        $inquiry->status = $this->status;
        $inquiry->update();
        $this->dispatchBrowserEvent('hide-edit-form');
        toastr()->success('Status has been updates');
    }



    public function render()
    {
        $services = ServiceRequest::where('status', $this->filterTerm)->get();

        return view('livewire.backend.service-request.service-request-component', [
            'services'=>$services
        ])->layout('layouts.backend');
    }
}
