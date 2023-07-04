<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function create()
    {
        $profil = Auth::user();
        dd($profil);
        return view(
            'users.profil.create',
            [
                'profil' => $profil
            ]
        );
    }
}
