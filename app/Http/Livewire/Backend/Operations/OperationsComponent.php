<?php

namespace App\Http\Livewire\Backend\Operations;

use App\Models\Operation;
use Livewire\Component;

class OperationsComponent extends Component
{
    public $project;

    public function showConfirmationModal($project)
    {
        $this->project = $project;

        $this->dispatchBrowserEvent('confirmation-modal');
    }

    public function actualDelete()
    {
        $project = Operation::where('id', $this->project['id'])->first();
        $project->delete();
        $this->dispatchBrowserEvent('confirmation-modal');
        $this->dispatchBrowserEvent('success', ['message' => 'Record has bee deleted']);
    }
    public function render()
    {
        $operations = Operation::all();

        return view('livewire.backend.operations.operations-component', ['operations'=>$operations])->layout('layouts.backend');
    }
}