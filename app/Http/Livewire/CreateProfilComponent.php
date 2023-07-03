<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateProfilComponent extends Component
{
    public string $sexe;
    public string $phone_number = '+33 021 0547';
    public string $bio = "I\'am current user";
    public string $path = 'ma_photo.png';
    public function render()
    {
        return view('livewire.create-profil-component');
    }
}
