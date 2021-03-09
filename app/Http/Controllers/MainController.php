<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome.index');
    }

    public function team()
    {
        return view('welcome.team');
    }

    public function about()
    {
        return view('welcome.about');
    }

    public function gallery()
    {
        return view('welcome.gallery');
    }

    public function contact()
    {
        return view('welcome.contact');
    }

    public function services()
    {
        return view('welcome.services');
    }
}
