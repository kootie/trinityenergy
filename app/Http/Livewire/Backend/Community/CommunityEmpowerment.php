<?php

namespace App\Http\Livewire\Backend\Community;

use App\Models\CommunityEmpowerment as ModelsCommunityEmpowerment;
use Livewire\Component;

class CommunityEmpowerment extends Component
{

    public $project;

    public function showConfirmationModal($project)
    {
        $this->project = $project;

        $this->dispatchBrowserEvent('confirmation-modal');
    }

    public function actualDelete()
    {
        $project = ModelsCommunityEmpowerment::where('id', $this->project['id'])->first();
        $project->delete();
        $this->dispatchBrowserEvent('confirmation-modal');
        $this->dispatchBrowserEvent('success', ['message' => 'Record has bee deleted']);
    }
    public function render()
    {
        $communityEmpowerment = ModelsCommunityEmpowerment::all();
        return view('livewire.backend.community.community-empowerment', [
            'communityEmpowerment' => $communityEmpowerment
        ])->layout('layouts.backend');
    }
}
