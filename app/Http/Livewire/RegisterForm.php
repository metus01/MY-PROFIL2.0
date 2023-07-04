<?php

namespace App\Http\Livewire;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterForm extends Component
{
    public string $name = 'Jonh Doe';
    public string $email = 'jonhdoe@gmail.com';
    public string $password = 'password';
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:4'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
       $user =  User::create($this->validate());
       $profil =  Profil::create(
            [
                'user_id' => $user->id
            ]
            );
        dd('User registered with success at '.$profil->id);
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
