<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $fullname;
    public $applying_for;
    public $contact_no;
    public $message;

    public $title = 'Get in Touch';

    public function updated($property)
    {
        $this->validateOnly($property, [
            'fullname' => 'required|min:3',
            'applying_for' => 'required',
            'contact_no' => 'required|numeric',
            'message' => 'required|min:5',
        ]);
    }

     public function submit()
    {
        $validated = $this->validate([
            'fullname' => 'required|min:3',
            'applying_for' => 'required',
            'contact_no' => 'required|numeric',
            'message' => 'required|min:5',
        ]);

        // Here you can store to DB or send email
        // Contact::create($validated);

        session()->flash('success', 'Your message has been submitted!');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
