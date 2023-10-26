<?php

namespace App\Http\Livewire\Backend\Projects;

use App\Models\Project;
use Livewire\Component;

class EditProjectComponent extends Component
{
    public $title;
    public $location;
    public $description;
    public $project;


    public function mount($slug)
    {
      $this->project = Project::where('id', $slug)->first();
      $this->title = $this->project->title;
      $this->location = $this->project->country;
      $this->description = $this->project->description;

    }

    public function updateProject()
    {
        $this->project->title = $this->title;
        $this->project->country = $this->location;
        $this->project->description = $this->description;
        $this->project->update();
        return redirect()->route('manage.project');
    }

    public function render()
    {
        return view('livewire.backend.projects.edit-project-component')->layout('layouts.backend');
    }
}
