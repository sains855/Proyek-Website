<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }

    public function rules(){
        return[
                'email'=>['required','email'],
                'password'=>['required'],
        ];
    }
    public function loginuser(){
        $this->validate();
        if(!Auth::attempt($this->only(['email','password']))){
            $this->addError('email',__('auth.failed'));
            return null;
        }
        return redirect()->to('/home');
    }
}
