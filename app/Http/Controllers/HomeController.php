<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HomeController extends Controller
{
    public function index()
    {
        $heroes = Hero::with('skills')->get();
        return view('home', compact('heroes'));
    }
}
