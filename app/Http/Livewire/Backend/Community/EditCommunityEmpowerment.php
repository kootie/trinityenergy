<?php

namespace App\Http\Livewire\Backend\Community;

use App\Models\CommunityEmpowerment;
use Livewire\Component;

class EditCommunityEmpowerment extends Component
{

    public $title;
    public $description;
    public $project;


    public function mount($slug)
    {
        $this->project = CommunityEmpowerment::where('id', $slug)->first();
        $this->title = $this->project->title;
        $this->description = $this->project->description;
    }

    public function updateProject()
    {
        $this->project->title = $this->title;
        $this->project->description = $this->description;
        $this->project->update();
        return redirect()->route('community.empowerment');
    }
    public function render()
    {
        return view('livewire.backend.community.edit-community-empowerment')->layout('layouts.backend');
    }
}
