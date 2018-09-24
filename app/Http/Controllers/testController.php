<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{

    public function About()
    {
        return view('about');
    }

    public function Contact()
    {
        return view('contact');
    }
}
