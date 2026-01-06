<?php

namespace Database\Seeders;

use App\Models\Poster;
use Illuminate\Database\Seeder;

class PosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posters = [
            [
                'title' => 'Fantasy',
                'category' => 'Digital Art',
                'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Graffiti',
                'category' => 'Street Art/Graffiti',
                'image' => 'https://images.unsplash.com/photo-1499781350541-7783f6c6a0c8?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Mountain Landscape',
                'category' => 'Nature',
                'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Pop Art',
                'category' => 'Comic',
                'image' => 'https://images.unsplash.com/photo-1578301978693-85fa9c0320b9?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Abstract',
                'category' => 'Abstract Art',
                'image' => 'https://images.unsplash.com/photo-1541963463532-d68292c34b19?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Architect',
                'category' => 'Architectural Art',
                'image' => 'https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Life Art',
                'category' => 'Still Life',
                'image' => 'https://images.unsplash.com/photo-1507208773393-40d9fc9f6052?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Concept Art',
                'category' => 'Conceptual',
                'image' => 'https://images.unsplash.com/photo-1550684848-fac1c5b4e853?auto=format&fit=crop&w=600&q=80'
            ],
        ];

        foreach ($posters as $poster) {
            Poster::create($poster);
        }
    }
}
