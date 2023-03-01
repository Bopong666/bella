<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ComponentLogin extends Component
{

    public $username, $password;

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }
    public function render()
    {
        return view('auth.component-login')->extends('auth.layouts.app')->section('content');
    }

    public function login()
    {
        $data = $this->validate(
            [
                'username' => 'required|string',
                'password' => 'required|string',
            ],
            [
                '*.required' => 'Harap di isi kolom ini',
            ],
        );

        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Username atau Password Anda salah!');
        }
    }
}
