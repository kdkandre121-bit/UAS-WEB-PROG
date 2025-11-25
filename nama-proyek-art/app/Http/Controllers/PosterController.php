<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosterController extends Controller
{
    /**
     * Display a listing of the posters.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 1. Prepare sample data for the view
        $posters = [
            [
                'title' => 'Fantasy',
                'category' => 'Digital Art',
                'image' => 'images/poster101.webp' // Assuming this file exists in public/images
            ],
            [
                'title' => 'Graffiti',
                'category' => 'Street Art/Graffiti',
                'image' => 'images/poster102.webp' // Assuming this file exists in public/images
            ],
            [
                'title' => 'Mountain Landscape',
                'category' => 'Nature',
                'image' => 'images/poster103.jpg' // Assuming this file exists in public/images
            ],
            [
                'title' => 'Pop Art',
                'category' => 'Comic',
                'image' => 'images/poster104.jpg' // Assuming this file exists in public/images
            ],
            [
                'title' => 'Abstract',
                'category' => 'Abstract Art',
                'image' => 'images/poster105.jpg' // Assuming this file exists in public/images
            ],
            [
                'title' => 'Architect',
                'category' => 'Architectural Art',
                'image' => 'images/poster106.jpg' // Assuming this file exists in public/images
            ],
            [
                'title' => 'Life Art',
                'category' => 'Still Life',
                'image' => 'images/poster107.jpg' // Assuming this file exists in public/images
            ],
            [
                'title' => 'Concept Art',
                'category' => 'Conceptual',
                'image' => 'images/poster108.jpg' // Assuming this file exists in public/images
            ],
        ];

        // 2. Pass the data to the 'poster' view
        return view('poster', [
            'posters' => $posters
        ]);
    }
}