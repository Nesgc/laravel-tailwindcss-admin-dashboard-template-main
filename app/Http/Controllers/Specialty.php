<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Specialty extends Controller
{
    public function index()
    {
        return view('specialties.index');
    }

    public function create()
    {
        return view('specialties.create');
    }
}
