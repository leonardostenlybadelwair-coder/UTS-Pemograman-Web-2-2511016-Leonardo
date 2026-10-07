<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FilmController extends Controller
{
    public function index(): View
    {
        $films = [
            [
                'id' => 1,
                'title' => 'World War Z',
                'director' => 'Marc Forster',
                'year' => 2013,
            ],
            [
                'id' => 2,
                'title' => 'Train to Busan',
                'director' => 'Yeon Sang-ho',
                'year' => 2016,
            ],
            [
                'id' => 3,
                'title' => 'Suanggi:Ilmu Kutukan',
                'director' => 'Dom Dharmo',
                'year' => 2026,
            ],
        ];

        return view('films.index', compact('films'));
    }
}