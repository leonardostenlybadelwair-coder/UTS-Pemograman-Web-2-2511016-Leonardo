<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function create(): View
    {
        return view('books.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
    {
        return view('books.show', compact('book'));
    }

    public function store(Request $request): RedirectResponse
    {
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'isbn' => [
            'nullable',
            'string',
            'max:20',
            'unique:books,isbn',
        ],
        'author' => ['required', 'string', 'max:150'],
        'publisher' => ['nullable', 'string', 'max:150'],
        'published_year' => [
            'nullable',
            'integer',
            'min:1900',
            'max:'.date('Y'),
        ],
        'price' => ['required', 'numeric', 'min:0'],
        'stock' => ['required', 'integer', 'min:0'],
        'description' => ['nullable', 'string'],
    ]);

    Book::create($validated);

    return redirect()
        ->route('books.index')
        ->with('success', 'Data buku berhasil ditambahkan.');
}

}