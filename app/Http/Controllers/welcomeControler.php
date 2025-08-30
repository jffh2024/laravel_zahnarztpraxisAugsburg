<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeControler extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
