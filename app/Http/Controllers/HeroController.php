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
        $skills = $request->input('skills');

        $heroes = Hero::query();

        if ($query) {
            $heroes->where('name', 'LIKE', "%{$query}%")
                ->orWhere('gender', 'LIKE', "%{$query}%")
                ->orWhereHas('skills', function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%{$query}%");
                });
        }

        if ($skills) {
            $heroes->whereHas('skills', function ($q) use ($skills) {
                $q->whereIn('skills.id', $skills);
            });
        }

        $heroes = $heroes->get();

        return view('heroes.index', compact('heroes'));
    }
}
