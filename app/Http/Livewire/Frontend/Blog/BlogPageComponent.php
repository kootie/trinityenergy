<?php

namespace App\Http\Livewire\Frontend\Blog;

use App\Models\Blog;
use Livewire\Component;

class BlogPageComponent extends Component
{
    public function render()
    {
        $blogs = Blog::latest()->get();
        return view('livewire.frontend.blog.blog-page-component', [
            'blogs'=>$blogs
        ])->layout('layouts.frontend');
    }
}
