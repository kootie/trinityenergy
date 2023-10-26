<?php

namespace App\Http\Livewire\Backend\CompanyInfo;

use App\Models\CompanyInfomation;
use Livewire\Component;
use Livewire\WithFileUploads;

class CompanyInfoComponent extends Component
{
    use WithFileUploads;
    
    public $information;

    public function mount()
    {
        $this->information = CompanyInfomation::where('id', 1)->first()->toArray();
    }


    public function updateInformation()
    {
        if (CompanyInfomation::count() == 1) {
            $data = CompanyInfomation::where('id', 1)->first();
            $data->name = $this->information['name'];
            $data->email = $this->information['email'];
            $data->gmail = $this->information['gmail'];
            $data->landline = $this->information['landline'];
            $data->phone1 = $this->information['phone1'];
            $data->phone2 = $this->information['phone2'];
            $data->whatsapp = $this->information['whatsapp'];
            $data->location = $this->information['location'];
            $data->facebook = $this->information['facebook'];
            $data->twitter = $this->information['twitter'];
            $data->instagram = $this->information['instagram'];
            $data->linkedin = $this->information['linkedin'];
            $data->mission = $this->information['mission'];
            $data->vision = $this->information['vision'];
            $data->about = $this->information['about'];
            $data->our_presence = $this->information['our_presence'];
            $data->energy_solution = $this->information['energy_solution'];
            $data->commitment = $this->information['commitment'];
            $data->innovation = $this->information['innovation'];
            $data->expanding_our_services = $this->information['expanding_our_services'];
            $data->partner_with_us = $this->information['partner_with_us'];
            $data->update();
            toastr()->success('Company details updated successfully!');
            
        } else {
            CompanyInfomation::create($this->information);
        }
    }
    public function render()
    {
        return view('livewire.backend.company-info.company-info-component')->layout('layouts.backend');
    }
}