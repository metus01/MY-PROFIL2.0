<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserNumberCounter extends Component
{
    public int $usersCounter = 0;

    public function booted()
    {
        $this->usersCounter = User::all()->count();
    }

    public function render()
    {
        return view('livewire.user-number-counter');
    }
}
