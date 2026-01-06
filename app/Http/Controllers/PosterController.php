<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PosterController extends Controller
{
    /**
     * Display a listing of the posters.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posters = Poster::all();
        return view('poster', ['posters' => $posters]);
    }
}