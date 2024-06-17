<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //
    public function index()
    {
        $data = "These are my skills.";
        return view('skills', compact('data'));
    }
}
