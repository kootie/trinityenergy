<?php

namespace App\Http\Livewire\Frontend\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectListingComponent extends Component
{
    public function render()
    {
        $projects = Project::all();
        return view('livewire.frontend.projects.project-listing-component', [
            'projects' => $projects
        ])->layout('layouts.frontend');
    }
}
