<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View ;
use Illuminate\Http\Request;


class FilController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : View
    {
    
        return view('users.fil');
    }
}
