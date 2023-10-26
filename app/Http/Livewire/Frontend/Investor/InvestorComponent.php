<?php

namespace App\Http\Livewire\Frontend\Investor;

use Livewire\Component;

class InvestorComponent extends Component
{
    public function render()
    {
        return view('livewire.frontend.investor.investor-component')->layout('layouts.frontend');
    }
}
