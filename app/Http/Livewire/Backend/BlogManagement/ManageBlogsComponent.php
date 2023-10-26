<?php

namespace App\Http\Livewire\Backend\BlogManagement;

use App\Models\Blog;
use Livewire\Component;

class ManageBlogsComponent extends Component
{
    public $project;

    public function showConfirmationModal($project)
    {
        $this->project = $project;

        $this->dispatchBrowserEvent('confirmation-modal');
    }

    public function actualDelete()
    {
        $project = Blog::where('id', $this->project['id'])->first();
        $project->delete();
        $this->dispatchBrowserEvent('confirmation-modal');
        $this->dispatchBrowserEvent('success', ['message'=>'Record has bee deleted']);
    }
    public function render()
    {
        $blogs =Blog::all();


        return view('livewire.backend.blog-management.manage-blogs-component',
        [
            'blogs' => $blogs
        ])->layout('layouts.backend');
    }
}
