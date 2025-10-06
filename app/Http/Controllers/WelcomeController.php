<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function message(): View
    {
        return view('welcome');
    }
}



