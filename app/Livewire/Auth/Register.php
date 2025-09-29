<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Register extends Component
{
    #[Layout('layouts.auth')]
    #[Title('Register Page')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
