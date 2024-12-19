<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }

    public function loginuser(){
        $this->validate([
            'email'=>'required','email','unique:users',
            'password'=>'required','confimed',
            ]);
        $user = user

    }
}
