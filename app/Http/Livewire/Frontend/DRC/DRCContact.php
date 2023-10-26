<?php

namespace App\Http\Livewire\Frontend\DRC;

use App\Models\Inquiry;
use Livewire\Component;

class DRCContact extends Component
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
        return view('livewire.frontend.d-r-c.d-r-c-contact')->layout('layouts.frontend');
    }
}
