<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;
   
    // public function login()
    // {
    //     $this->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
    //         return redirect()->intended('/dashboard');
    //     }

    //     session()->regenerate();
    //     return redirect()->intended(route('dashboard'));
    // }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
