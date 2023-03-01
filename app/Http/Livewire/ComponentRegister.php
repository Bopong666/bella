<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ComponentRegister extends Component
{
    public $username, $alamat, $no_hp, $password, $password_confirmation;
    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('auth.component-register')->extends('auth.layouts.app')->section('content');
    }

    public function register()
    {
        $data = $this->validate([
            'username' => 'required|string|max:30|unique:aktor,username',
            'alamat' => 'required|string',
            'no_hp' => 'required|numeric',
            'password' => 'required|confirmed',
        ], [
            'username.unique' => 'Username sudah terdaftar',
            'password.confirmed' => 'Password tidak sama',
            'no_hp.numeric' => 'Hanya bisa di isi angka',
            '*.required' => 'Harap di isi',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['level'] = '1';

        $user = User::create($data);

        session()->flash('success', 'Register Berhasil!');
        return redirect()->route('login');
    }
}
