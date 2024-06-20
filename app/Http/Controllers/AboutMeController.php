<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    //
    public function index()
    {
        $data = "About Me";
        return view('about_me', compact('data'));
    }

    public function about()
    {
        $data = "This is the About Me page.";
        return view('about_me', compact('data'));
    }
}
