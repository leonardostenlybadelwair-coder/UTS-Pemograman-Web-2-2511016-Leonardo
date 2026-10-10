@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
    <h1>Data Buku</h1>

    <p><a href="{{ route('books.create') }}">+ Tambah Buku</a></p>

    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
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
                    <td colspan="5" align="center">Data belum tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if ($books->hasPages())
        <p>
            @if ($books->onFirstPage())
                <span>Sebelumnya</span>
            @else
                <a href="{{ $books->previousPageUrl() }}">Sebelumnya</a>
            @endif

            |
            Halaman {{ $books->currentPage() }}
            dari {{ $books->lastPage() }}
            |

            @if ($books->hasMorePages())
                <a href="{{ $books->nextPageUrl() }}">Berikutnya</a>
            @else
                <span>Berikutnya</span>
            @endif
        </p>
    @endif
@endsection