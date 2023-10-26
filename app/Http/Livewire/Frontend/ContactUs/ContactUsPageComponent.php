<?php

namespace App\Http\Livewire\Frontend\ContactUs;

use App\Models\Inquiry;
use App\Models\User;
use Livewire\Component;

class ContactUsPageComponent extends Component
{
    public $name;
    public $email;
    public $subject;
    public $comments;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email:rfc,dns',
        'subject' => 'required',
        'comments' => 'required',
    ];

    public function sendMessage()
    {

        // $check_existence  = Inquiry::where('email', $this->email)->get();

        // if ($check_existence->count() > 0) {
        //     toastr()->error('You already have a new message!');
        // } else {
            $validatedData = $this->validate();
            $new = new Inquiry();
            $new->fullname = $validatedData['name'];
            $new->email = $validatedData['email'];
            $new->subject = $validatedData['subject'];
            $new->comment = $validatedData['comments'];
            $new->status = 'new';
            $new->save();
            toastr()->success('Your message has been sent!');
            $this->reset();
        // }
    }
    public function render()
    {
        $mapData = [
            [
                'lat' => 40.712776,
                'lng' => -74.005974,
                'title' => 'New York City',
                'image' => 'https://example.com/images/nyc.jpg',
                'details' => 'The most populous city in the United States.',
                'directions' => 'https://maps.google.com/maps?q=New+York+City',
            ],
            [
                'lat' => 51.507351,
                'lng' => -0.127758,
                'title' => 'London',
                'image' => 'https://example.com/images/london.jpg',
                'details' => 'The capital and largest city of England.',
                'directions' => 'https://maps.google.com/maps?q=London',
            ],
            // Add more pins as needed
        ];
        return view('livewire.frontend.contact-us.contact-us-page-component', [
            'mapData'=>$mapData
        ])->layout('layouts.frontend');
    }
}
