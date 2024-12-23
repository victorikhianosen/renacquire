<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class NewsLetter extends Component
{

    #[Validate('required|email')]
    public $email;

    public function render()
    {
        return view('livewire.news-letter');
    }

    public function submitForm(){
        $validated = $this->validate();



        $this->dispatch('alert', type: 'success', text: 'Submit successful.', position: 'center', timer: 10000, button: false);

        // session()->flash('message', 'Thank you for signing up for our newsletter!');

        $this->reset('email');
    }
}
