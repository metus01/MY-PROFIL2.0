<?php

namespace App\Http\Livewire;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProfilComponent extends Component
{
    use WithFileUploads;
    public Profil $profil;
    public string $sexe = 'Perso';
    public string $phone_number = '+33 021 0547';
    public string $bio = "I\'am current user";
    public $photo;
    public string $path = 'ma_photo.png';

    public function mount()
    {
        $this->profil->sexe = $this->sexe;
        $this->profil->phone_number = $this->phone_number;
        $this->profil->bio = $this->bio;
    }
//     <form wire:submit.prevent="save">

//     <input type="file" wire:model="photo">



//     @error('photo') <span class="error">{{ $message }}</span> @enderror



// //     <button type="submit">Save Photo</button>
// public function save()

// {

//     $this->validate([

//         'photo' => 'image|max:1024', // 1MB Max

//     ]);



//     $this->photo->store('photos');

// }

// }
// </form>
    public function updated($propertyName)
    {
        
    }
    public function render()
    {
        return view('livewire.create-profil-component');
    }
}
