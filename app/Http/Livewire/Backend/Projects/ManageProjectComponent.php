<?php

namespace App\Http\Livewire\Backend\Projects;

use App\Models\Project;
use Livewire\Component;

class ManageProjectComponent extends Component
{
    public $project;

    public function showConfirmationModal($project)
    {
        $this->project = $project;

        $this->dispatchBrowserEvent('confirmation-modal');
    }

    public function actualDelete()
    {
        $project = Project::where('id', $this->project['id'])->first();
        $project->delete();
        $this->dispatchBrowserEvent('confirmation-modal');
        $this->dispatchBrowserEvent('success', ['message'=>'Record has bee deleted']);
    }
    public function render()
    {
        $projects =Project::all();
        return view('livewire.backend.projects.manage-project-component', [
            'projects' => $projects
        ])->layout('layouts.backend');
    }
}
