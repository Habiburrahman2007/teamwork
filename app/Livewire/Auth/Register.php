<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;

class Register extends Component
{
    #[Layout('layouts.auth')]
    #[Title('Login Page')]
    public $name, $email, $password, $password_confirmation;
    public function register()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.app');
    }
}
