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
    public function search(Request $request)
    {
        $query = $request->input('query');

        $heroes = Hero::where('name', 'LIKE', "%$query%")
            ->orWhere('gender', 'LIKE', "%$query%")
            ->orWhereHas('skills', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%$query%");
            })
            ->get();

        return view('heroes.index', compact('heroes'));
    }
}
