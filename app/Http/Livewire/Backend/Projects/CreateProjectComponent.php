<?php

namespace App\Http\Livewire\Backend\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateProjectComponent extends Component
{
    public $title;
    public $location;
    public $description;

    public function createProject()
    {
        $service  = new Project();
        $service->title = $this->title;
        $service->country = $this->location;
        $service->description = $this->description;
        $service->created_by = Auth::user()->id;
        $service->save();
        return redirect()->route('manage.project');
    }
    public function render()
    {
        return view('livewire.backend.projects.create-project-component')->layout('layouts.backend');
    }
}
