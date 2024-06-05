<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function show(Hero $hero)
    {
        return view('heroes.show', compact('hero'));
    }
}
