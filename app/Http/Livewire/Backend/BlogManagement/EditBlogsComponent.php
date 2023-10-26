<?php

namespace App\Http\Livewire\Backend\BlogManagement;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBlogsComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $body;
    public $cover_image;
    public $new_cover_image;
    public $description;
    public $blog;


    public function mount($slug)
    {
        $this->blog = Blog::where('id', $slug)->first();
        $this->title = $this->blog->title;
        $this->body = $this->blog->body;
        $this->cover_image = $this->blog->cover_image;
    }

    public function updateBlog()
    {
        $this->blog->title = $this->title;
        $this->blog->body = $this->body;
        if ($this->new_cover_image) {
            $new_cover_image_name = Carbon::now()->timestamp . '.' . $this->new_cover_image->extension();
            $this->blog->cover_image = $new_cover_image_name;
            $this->new_cover_image->storeAs('/blog', $new_cover_image_name);
        }

        $this->blog->update();
        return redirect()->route('manage.blog');
    }
    public function render()
    {
        return view('livewire.backend.blog-management.edit-blogs-component')->layout('layouts.backend');
    }
}
