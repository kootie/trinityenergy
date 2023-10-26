<?php

namespace App\Http\Livewire\Frontend\Blog;

use App\Models\Blog;
use Livewire\Component;

class SingleBlogComponent extends Component
{
    public $blog;

    public function mount($slug)
    {
        $this->blog = Blog::where('id', $slug)->first();
 
    }
    public function render()
    {
        $blogs = Blog::latest()->get();

        return view('livewire.frontend.blog.single-blog-component', [
            'blogs'=>$blogs
        ])->layout('layouts.frontend');
    }
}
