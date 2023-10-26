<?php

namespace App\Http\Livewire\Backend\Dashboard;

use App\Models\Inquiry;
use Livewire\Component;

class DashboardPageComponent extends Component
{
    public $filterTerm = 'new';
    public $inquiryDetails;
    public $inquiryId;
    public $status;
   

    public function changeInquiry($filterTerm)
    {
        $this->filterTerm = $filterTerm;
    }

    public function viewShowModal($inquiryId)
    {
        $this->inquiryDetails = Inquiry::where('id', $inquiryId)->first();
        $this->dispatchBrowserEvent('show-inquiry-form');
    }

    public function viewEditModal($inquiryId)
    {
        $this->inquiryId = $inquiryId;
        $this->dispatchBrowserEvent('show-edit-form');
    }

   

    public function updateStatus()
    {
        $inquiry = Inquiry::where('id', $this->inquiryId)->first();
        $inquiry->status = $this->status;
        $inquiry->update();
        $this->dispatchBrowserEvent('hide-edit-form');
        toastr()->success('Status has been updates');
        
    }



    public function render()
    {
        $inquiries = Inquiry::where('status', $this->filterTerm)->get();

        return view('livewire.backend.dashboard.dashboard-page-component', [
            'inquiries' => $inquiries
        ])->layout('layouts.backend');
    }
}
