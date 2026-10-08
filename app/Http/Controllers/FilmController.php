<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\View\View;

class FilmController extends Controller
{
    public function index(): View
    {
        $films = Film::query()
            ->latest()
            ->paginate(10);

        return view('films.index', compact('films'));
    }

    public function show(Film $film): View
    {
        return view('films.show', compact('film'));
    }
}