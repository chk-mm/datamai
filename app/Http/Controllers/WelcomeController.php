<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        // return 'test';
        return view('welcome');
    }
}
