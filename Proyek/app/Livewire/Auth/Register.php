<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');
    }
    public function Registeruser(){
    $this->validate([
        'name'=>'required',
        'email'=>'required','email','unique:users',
        'password'=>'required','confirmed',
        ]);
    $user = User::create([
        'name'=>$this->name,
        'email'=>$this->email,
        'password'=>bcrypt($this->password),
    ]);
    Auth::login($user, true);
    return redirect()->to('/home');
    }
}
