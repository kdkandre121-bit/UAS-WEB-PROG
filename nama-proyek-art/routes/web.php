<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosterController;

Route::get('/', [PosterController::class, 'index']);
