<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('users.auth.login');
    }
    public function register() : View
    {
        return view('users.auth.register');
    }
}
