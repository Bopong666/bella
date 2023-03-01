<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ComponentProfil extends Component
{
    public $username, $alamat, $no_hp, $password, $password_confirmation, $current_password;

    public $gantiForm = false;
    public function mount()
    {
        $this->username = Auth::user()->username;
        if (Auth::user()->level == 1) {
            $this->alamat = Auth::user()->alamat;
            $this->no_hp = Auth::user()->no_hp;
        }
    }

    public function render()
    {
        return view('livewire.component-profil')->extends('layouts.app')->section('content');
    }

    public function gantiFormIni()
    {
        $this->gantiForm = !$this->gantiForm;
    }
    public function store()
    {
        if (Auth::user()->level == 1) {

            $data = $this->validate([
                'username' => 'required|string|max:30|unique:aktor,username,' . Auth::user()->id,
                'alamat' => 'required|string',
                'no_hp' => 'required|string',
                'current_password' => 'required|current_password:web',
                'password' => 'confirmed',
            ], [
                'username.unique' => 'Username sudah terdaftar',
                'current_password.current_password' => 'Password salah',
                'password.confirmed' => 'Password tidak sama',
                '*.required' => 'Harap di isi',
            ]);
        } else {
            $data = $this->validate([
                'username' => 'required|string|max:30|unique:aktor,username,' . Auth::user()->id,
                'current_password' => 'required|current_password:web',
                'password' => 'confirmed',
            ], [
                'username.unique' => 'Username sudah terdaftar',
                'current_password.current_password' => 'Password salah',
                'password.confirmed' => 'Password tidak sama',
                '*.required' => 'Harap di isi',
            ]);
        }

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        User::find(Auth::user()->id)->update($data);
        $this->reset(['password', 'current_password', 'password_confirmation']);
        return redirect(request()->header('Referer'))->with('message', 'User updated successfully.');
    }

    public function edit()
    {
        $this->gantiForm = !$this->gantiForm;
    }
}
