<?php

namespace App\Http\Livewire\Backend\Community;

use App\Models\CommunityEmpowerment;
use Livewire\Component;

class CreateCommunityEmpowerment extends Component
{
    public $title;
    public $description;

    public function createProject()
    {
        $empowerment  = new CommunityEmpowerment();
        $empowerment->title = $this->title;
        $empowerment->description = $this->description;
        $empowerment->save();
        return redirect()->route('community.empowerment');
    }

    public function render()
    {
        return view('livewire.backend.community.create-community-empowerment')->layout('layouts.backend');
    }
}
