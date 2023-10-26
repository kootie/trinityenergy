<?php

namespace App\Http\Livewire\Frontend\Sustainability;

use App\Models\CommunityEmpowerment;
use Livewire\Component;

class SustainabilityPageComponent extends Component
{
    public function render()
    {
        $communities = CommunityEmpowerment::all();

        return view('livewire.frontend.sustainability.sustainability-page-component', [
            'communities' => $communities
        ])->layout('layouts.frontend');
    }
}
