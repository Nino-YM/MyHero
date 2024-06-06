<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Hero;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    public function show(Skill $skill)
    {
        $heroes = Hero::whereHas('skills', function ($query) use ($skill) {
            $query->where('skills.id', $skill->id);
        })->get();

        return view('skills.show', compact('skill', 'heroes'));
    }
}
