<?php

namespace App\Http\Livewire\Frontend\Homepage;

use App\Models\Blog;
use App\Models\Operation;
use App\Models\Project;
use App\Models\ServiceRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HomePageComponent extends Component
{
    public $showModal = false;

    public $firstname; 
    public $lastname; 
    public $email; 
    public $phone; 
    public $service; 

    public  $images = [
        "https://trinitynrg.pingit.co.ke/wp-content/uploads/2020/05/ser1.jpg",
    "https://trinitynrg.pingit.co.ke/wp-content/uploads/2020/05/ser2.jpg",
       "https://trinitynrg.pingit.co.ke/wp-content/uploads/2020/05/ser3.jpg",
       "https://trinitynrg.pingit.co.ke/wp-content/uploads/2023/02/admin-ajax-1.jpg"
    ];

    public function submitRequest()
    {
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'service'=>'required',
        ]);

        $service = new ServiceRequest();
        $service->firstname = $this->firstname; 
        $service->lastname = $this->lastname; 
        $service->email = $this->email; 
        $service->phone = $this->phone; 
        $service->service = $this->service; 
        $service->status = 'new';
        $service->save();
        $this->dispatchBrowserEvent('close-example-modal');
        toastr()->success('Your message has been sent!');
    
    }

    public function render()
    {
        $blogs = Blog::latest()->take(3)->get();
        $projects  = Project::all();
        $operations = Operation::all();

        // Check if the 'visited' session variable exists
        if (!Session::has('visited')) {
            // Set the 'visited' session variable
            Session::put('visited', true);
            $this->showModal = true;
            $projects  = Project::all();

            return view('livewire.frontend.homepage.home-page-component', [
            'blogs' => $blogs,
            'projects' => $projects,
            'operations' => $operations
            ])->layout('layouts.frontend');
        }

       
        return view('livewire.frontend.homepage.home-page-component', [
            'blogs' => $blogs,
            'projects' => $projects,
            'operations' => $operations
        ])->layout('layouts.frontend');
    }
}