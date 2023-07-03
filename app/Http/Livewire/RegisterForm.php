<?php

namespace App\Http\Livewire;

use App\Models\User;
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
        User::created($this->validate());
        dd('User registered with success');
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
