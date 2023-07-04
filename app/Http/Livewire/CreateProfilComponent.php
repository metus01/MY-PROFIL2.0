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
         $this->profil->sexe !== null ?  $this->sexe : $this->profil->sexe;
         $this->profil->phone_number !== null ? $this->phone_number : $this->profil->phone_number;
        $this->profil->bio = $this->bio;
    }
    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'profil.sexe' => 'required',
                'profil.phone_number' => 'required',
                'profil.bio' => 'required',
            ]
        );
    }
    public function uploadedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
        // $this->file_progress_upload_bar = 0;
        // $this->profil =
        //  $this->photo->storeAs('photos', $this->photo->getClientOriginalName() , 'public' , function($uploadedFile)
        // {
        //     $this->file_progress_upload_bar = ($uploadedFile->getSize()/$uploadedFile->getMaxFilesize()*100);
        // });
    }
    public function save()
    {
        dd($this->profil);
    }
    public function render()
    {
        return view('livewire.create-profil-component');
    }
}
