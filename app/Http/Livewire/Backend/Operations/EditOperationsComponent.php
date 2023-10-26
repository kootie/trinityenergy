<?php

namespace App\Http\Livewire\Backend\Operations;

use App\Models\Operation;
use Livewire\Component;

class EditOperationsComponent extends Component
{
    public $title;
    public $description;
    public $project;


    public function mount($slug)
    {
        $this->project = Operation::where('id', $slug)->first();
        $this->title = $this->project->title;
        $this->description = $this->project->description;
    }

    public function updateProject()
    {
        $this->project->title = $this->title;
        $this->project->description = $this->description;
        $this->project->update();
        return redirect()->route('manage.operation');
    }
    public function render()
    {
        return view('livewire.backend.operations.edit-operations-component')->layout('layouts.backend');
    }
}