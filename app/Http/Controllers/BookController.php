<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
{
    $books = Book::query()
        ->latest()
        ->paginate(10);

    return view('books.index', compact('books'));
}
    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
{
    return view('books.show', compact('book'));
}

}