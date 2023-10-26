<?php

namespace App\Http\Livewire\Frontend\Operations;

use App\Models\Operation;
use Livewire\Component;

class OperationDetails extends Component
{
    public $operation;

    public function mount($slug)
    {
        $this->operation = Operation::where('id', $slug)->first();
    }
    public function render()
    {
        $operations = Operation::all();
        return view('livewire.frontend.operations.operation-details', [
            'operations'=>$operations
        ])->layout('layouts.frontend');
    }
}