<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function indexPage () 
    {
        return view('pages.index');
    }

    public function aboutPage () 
    {
        return view('pages.about');
    }

    public function servicePage () 
    {
        return view('pages.service');
    }
    public function contactPage () 
    {
        return view('pages.contact');
    }
    
}
