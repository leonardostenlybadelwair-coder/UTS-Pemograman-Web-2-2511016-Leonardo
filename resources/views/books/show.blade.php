@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h1>{{ $book->title }}</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th align="left">ISBN</th>
            <td>{{ $book->isbn ?: '-' }}</td>
        </tr>
        <tr>
            <th align="left">Penulis</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th align="left">Harga</th>
            <td>Rp {{ number_format((float) $book->price, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th align="left">Stok</th>
            <td>{{ $book->stock }}</td>
        </tr>
    </table>

    <p><a href="{{ route('books.index') }}">Kembali</a></p>
@endsection