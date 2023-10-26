<?php

namespace App\Http\Livewire\Backend\Operations;

use App\Models\Operation;
use Livewire\Component;

class CreateOperationsComponent extends Component
{
    public $title;
    public $description;

    public function createProject()
    {
        $empowerment  = new Operation();
        $empowerment->title = $this->title;
        $empowerment->description = $this->description;
        $empowerment->save();
        return redirect()->route('manage.operation');
    }

    public function render()
    {
        return view('livewire.backend.operations.create-operations-component')->layout('layouts.backend');
    }
}