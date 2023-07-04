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
    // public string $sexe = 'Perso';
    // public string $phone_number = '+33 021 0547';
    // public string $bio = "I\'am current user";
    // public $photo;
    // public string $path = 'ma_photo.png';
    // public function updated($propertyName)
    // {
    //     $this->validate(
    //         $propertyName,
    //         [
    //             'profil.sexe' => 'required',
    //             'phone_number' => 'required',
    //             'photo.bio' => 'required',
    //         ]
    //     );
    //}
    public function uploadedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }
    public function save()
    {
        $path = $this->photo->store();
    //    $updated  =  $this->profil->update(
    //         [
    //             'sexe' => $this->sexe,
    //             'phone_number' => $this->phone_number,
    //             'bio' => $this->bio,
    //             'path' => $path,
    //         ]
    //         );
    //         dd($this->profil);
    $this->profil->path = $path;
    $this->profil->save();
    }
    public function render()
    {
        return view('livewire.create-profil-component');
    }
}
