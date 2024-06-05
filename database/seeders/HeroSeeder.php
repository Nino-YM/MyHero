<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use App\Models\Hero;


class HeroSeeder extends Seeder
{
    public function run()
    {
        $heroes = [
            [
                'name' => 'Albert Einstein',
                'description' => 'Developed the theory of relativity.',
                'gender' => 'Male',
                'image' => 'AlbertEinstein.jpg',
                'skills' => ['Physics']
            ],
            [
                'name' => 'Marie Curie',
                'description' => 'Pioneered research on radioactivity.',
                'gender' => 'Female',
                'image' => 'MarieCurie.jpg', 
                'skills' => ['Chemistry', 'Physics']
            ],
            [
                'name' => 'Isaac Newton',
                'description' => 'Formulated the laws of motion and universal gravitation.',
                'gender' => 'Male',
                'image' => 'IsaacNewton.jpg',
                'skills' => ['Physics', 'Mathematics']
            ]
        ];

        foreach ($heroes as $heroData) {
            $hero = Hero::create([
                'name' => $heroData['name'],
                'description' => $heroData['description'],
                'gender' => $heroData['gender'],
                'image' => $heroData['image'],
            ]);

            foreach ($heroData['skills'] as $skillName) {
                $skill = Skill::firstOrCreate(['name' => $skillName]);
                $hero->skills()->attach($skill);
            }
        }
    }
}
