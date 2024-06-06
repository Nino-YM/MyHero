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
            ],
            [
                'name' => 'Carl Sagan',
                'description' => 'Popularized astronomy and contributed to extraterrestrial life research.',
                'gender' => 'Male',
                'image' => 'CarlSagan.jpg',
                'skills' => ['Astrophysics']
            ],
            [
                'name' => 'Eugene Shoemaker',
                'description' => 'Co-discovered Comet Shoemaker-Levy 9, highlighting the dangers of comet impacts on Earth.',
                'gender' => 'Male',
                'image' => 'EugeneShoemaker.jpg',
                'skills' => ['Astrophysics']
            ],
            [
                'name' => 'Jill Tarter',
                'description' => 'Contributed to the search for extraterrestrial intelligence (SETI).',
                'gender' => 'Female',
                'image' => 'JillTarter.jpg',
                'skills' => ['Astrophysics']
            ],
            [
                'name' => 'John von Neumann',
                'description' => 'Contributed to game theory and nuclear deterrence strategies.',
                'gender' => 'Male',
                'image' => 'JohnVonNeumann.jpg',
                'skills' => ['Mathematics']
            ],
            [
                'name' => 'Alan Turing',
                'description' => 'Broke the Enigma code during World War II and laid the groundwork for modern computing.',
                'gender' => 'Male',
                'image' => 'AlanTuring.jpg',
                'skills' => ['Mathematics', 'Computer Science']
            ],
            [
                'name' => 'Katherine Johnson',
                'description' => 'Her calculations of orbital mechanics were critical to the success of numerous NASA missions.',
                'gender' => 'Female',
                'image' => 'KatherineJohnson.jpg',
                'skills' => ['Mathematics']
            ],
            [
                'name' => 'Rachel Carson',
                'description' => 'Raised awareness about the dangers of pesticides, leading to policy changes.',
                'gender' => 'Female',
                'image' => 'RachelCarson.jpg',
                'skills' => ['Environmental Science']
            ],
            [
                'name' => 'Norman Borlaug',
                'description' => 'Developed high-yielding crops during the Green Revolution, saving over a billion people from starvation.',
                'gender' => 'Male',
                'image' => 'NormanBorlaug.jpg',
                'skills' => ['Environmental Science']
            ],
            [
                'name' => 'Henry Bessemer',
                'description' => 'Invented the Bessemer process for steelmaking, revolutionizing construction and manufacturing.',
                'gender' => 'Male',
                'image' => 'HenryBessemer.jpg',
                'skills' => ['Engineering']
            ],
            [
                'name' => 'Tim Berners-Lee',
                'description' => 'Inventor of the World Wide Web, revolutionizing communication and access to information.',
                'gender' => 'Male',
                'image' => 'TimBernersLee.jpg',
                'skills' => ['Engineering']
            ],
            [
                'name' => 'Florence Nightingale',
                'description' => 'Pioneered modern nursing practices and sanitary reforms in medical care.',
                'gender' => 'Female',
                'image' => 'FlorenceNightingale.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'Ignaz Semmelweis',
                'description' => 'Introduced handwashing standards in medical practices, significantly reducing mortality rates.',
                'gender' => 'Male',
                'image' => 'IgnazSemmelweis.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'Edward Jenner',
                'description' => 'Developed the smallpox vaccine, leading to the eradication of smallpox.',
                'gender' => 'Male',
                'image' => 'EdwardJenner.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'Alexander Fleming',
                'description' => 'Discovered penicillin, the first antibiotic, saving countless lives.',
                'gender' => 'Male',
                'image' => 'AlexanderFleming.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'Jonas Salk',
                'description' => 'Developed the polio vaccine, nearly eradicating polio worldwide.',
                'gender' => 'Male',
                'image' => 'JonasSalk.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'Tu Youyou',
                'description' => 'Discovered artemisinin, a drug that has significantly reduced mortality rates from malaria.',
                'gender' => 'Female',
                'image' => 'TuYouyou.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'John Snow',
                'description' => 'Known as one of the fathers of modern epidemiology, helped establish the importance of clean water and sanitation.',
                'gender' => 'Male',
                'image' => 'JohnSnow.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'Paul Ehrlich',
                'description' => 'Developed the first successful treatment for syphilis and made significant contributions to immunology and chemotherapy.',
                'gender' => 'Male',
                'image' => 'PaulEhrlich.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'William Foege',
                'description' => 'Played a crucial role in the successful campaign to eradicate smallpox.',
                'gender' => 'Male',
                'image' => 'WilliamFoege.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'James Watson',
                'description' => 'Co-discovered the structure of DNA, revolutionizing medicine and genetics.',
                'gender' => 'Male',
                'image' => 'JamesWatson.jpg',
                'skills' => ['Medical']
            ],
            [
                'name' => 'Francis Crick',
                'description' => 'Co-discovered the structure of DNA, revolutionizing medicine and genetics.',
                'gender' => 'Male',
                'image' => 'FrancisCrick.jpg',
                'skills' => ['Medical']
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
