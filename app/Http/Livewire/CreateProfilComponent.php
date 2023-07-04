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
    protected $rules = [
        'profil.sexe' => 'required',
        'profil.bio' => 'required|min:12',
        'profil.phone_number' => 'required'
    ];
    public $photo;
    public function uploadedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }
    public function save()
    {
        $this->validate();
        $path = $this->photo->store();
        $this->profil->path = $path;
        $this->profil->save();
    }
    public function render()
    {
        return view('livewire.create-profil-component');
    }
}
