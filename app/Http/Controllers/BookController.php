<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Dasar Pemrograman Web',
                'author' => 'Ayu Pratama',
            ],
            [
                'id' => 2,
                'title' => 'Basis Data Terapan',
                'author' => 'Bima Nugraha',
            ],
        ];

        return view('books.index', compact('books'));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): View
    {
        return view('books.show-static', ['id' => $id]);
    }
}