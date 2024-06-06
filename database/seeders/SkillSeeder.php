<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        $skills = [
            'Physics',
            'Chemistry',
            'Mathematics',
            'Astrophysics',
            'Environmental Science',
            'Engineering',
            'Medical',
            'Computer Science'
        ];

        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }
    }
}
