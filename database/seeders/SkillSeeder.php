<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = ['astronomy', 'physics', 'chemistry', 'biology'];
        
        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }
    }
}
