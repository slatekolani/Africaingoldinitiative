<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        return view('frontEnd.home');
    }

    public function aboutUs()
    {
        return view('frontEnd.aboutUs');
    }

    public function programs()
    {
        return view('frontEnd.programs');
    }

    public function team()
    {
        return view('frontEnd.team');
    }
    public function impact()
    {
        return view('frontEnd.impact');
    }
    public function gallery()
    {
        return view('frontEnd.gallery');
    }
    public function contactUs()
    {
        return view('frontEnd.contactUs');
    }
}
