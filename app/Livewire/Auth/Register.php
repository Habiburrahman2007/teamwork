<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Layout('layouts.auth')]
    #[Title('Register Page')]
    public $name, $email, $password, $password_confirmation;

    // Rules Livewire
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ];

    // Validasi realtime saat user mengetik password
    public function updatedPassword()
    {
        $this->validateOnly('password');
    }

    public function register()
    {
        // Validasi semua fields
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
