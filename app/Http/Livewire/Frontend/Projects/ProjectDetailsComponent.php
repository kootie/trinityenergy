<?php

namespace App\Http\Livewire\Frontend\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectDetailsComponent extends Component
{
    public $project;

    public function mount($slug)
    {
        $this->project = Project::where('id', $slug)->first();
    }
    public function render()
    {
        $projects = Project::all();
        return view('livewire.frontend.projects.project-details-component',[
            'projects'=>$projects
        ])->layout('layouts.frontend');
    }
}
