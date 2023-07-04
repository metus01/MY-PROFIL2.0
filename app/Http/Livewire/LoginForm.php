<?php

namespace App\Http\Livewire;

use App\Models\User;
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
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();
        if (Auth::attempt($this->validate())) {
            $user = User::where('id', Auth::id())->get();
            dd($user);
            return to_route('profil.create')->with('welcome', 'Welcome to your profil');
        } else {
            return back()->with('error', 'Login Failed , credentials not found');
        }
    }
    public function render()
    {
        return view('livewire.login-form');
    }
}
