<?php

namespace App\Http\Livewire\Backend\BlogManagement;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBlogComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $body;

    public $cover_image;

    public function createBlog()
    {
        $blog  = new Blog();
        $blog->title = $this->title;
        $cover_image_name =Carbon::now()->timestamp. '.'. $this->cover_image->extension();
        $blog->cover_image = $cover_image_name;
        $this->cover_image->storeAs('/blog', $cover_image_name);
        $blog->body = $this->body;
        $blog->created_by = Auth::user()->id;
        $blog->save();
        return redirect()->route('manage.blog');
    }
    public function render()
    {
        return view('livewire.backend.blog-management.create-blog-component')->layout('layouts.backend');
    }
}
