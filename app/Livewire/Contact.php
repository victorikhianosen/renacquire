<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Contact extends Component
{


    #[Validate('required')]
    public $first_name;

    #[Validate('required')]
    public $last_name;

    #[Validate('required|email')]
    public $email;


    #[Validate('required')]
    public $phone;


    #[Validate('required')]
    public $message;


    public function render()
    {
        return view('livewire.contact');
    }

    public function submitContact(){
        // dd('Victor Ikhianosen');

        $validated = $this->validate();

        $this->dispatch('alert', type: 'success', text: 'Form successfully Submitted.', position: 'center', timer: 10000, button: false);

        $this->reset();
    }
}
