<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $password = 'password';
    public $email = 'JonhDoe@gmail.com';
    protected $rules = [
        'password' => 'required',
        'email' => 'required|email'
    ];
    public function updated($email, $password)

    {

        $this->validateOnly($email);
        $this->validateOnly($password);
    }
    public function submit()
    {
        $this->validate();
        if (Auth::attempt($this->validate())) {
            dd('User Logged');
        } else {
            return back()->with('error', 'Login Failed');
        }
    }
    public function render()
    {
        return view('livewire.login-form');
    }
}
