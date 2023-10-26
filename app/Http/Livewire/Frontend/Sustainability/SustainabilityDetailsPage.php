<?php

namespace App\Http\Livewire\Frontend\Sustainability;

use App\Models\CommunityEmpowerment;
use Livewire\Component;

class SustainabilityDetailsPage extends Component
{

    public $empowerment;

    public function mount($slug)
    {
        $this->empowerment = CommunityEmpowerment::where('id', $slug)->first();
    }
    public function render()
    {

        $projects = CommunityEmpowerment::all();
        return view('livewire.frontend.sustainability.sustainability-details-page', [
            'projects' => $projects
        ])->layout('layouts.frontend');
    }
}
