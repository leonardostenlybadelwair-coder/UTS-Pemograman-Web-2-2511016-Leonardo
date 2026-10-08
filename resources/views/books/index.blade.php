@forelse ($books as $book)
    <tr>
        <td>{{ $books->firstItem() + $loop->index }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->stock }}</td>
        <td>
            <a href="{{ route('books.show', $book) }}">Detail</a>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5">Data belum tersedia.</td>
    </tr>
@endforelse
@if ($books->hasPages())
    <nav>
        @if ($books->onFirstPage())
            <span>Sebelumnya</span>
        @else
            <a href="{{ $books->previousPageUrl() }}">Sebelumnya</a>
        @endif

        <span>
            Halaman {{ $books->currentPage() }}
            dari {{ $books->lastPage() }}
        </span>

        @if ($books->hasMorePages())
            <a href="{{ $books->nextPageUrl() }}">Berikutnya</a>
        @endif
    </nav>
@endif