@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf

        <table cellpadding="6" cellspacing="0">
            <tr>
                <td><label for="title">Judul</label></td>
                <td>
                    <input id="title" name="title" value="{{ old('title') }}" size="40">
                    @error('title')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="isbn">ISBN</label></td>
                <td>
                    <input id="isbn" name="isbn" value="{{ old('isbn') }}" size="40">
                    @error('isbn')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="author">Penulis</label></td>
                <td>
                    <input id="author" name="author" value="{{ old('author') }}" size="40">
                    @error('author')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="publisher">Penerbit</label></td>
                <td>
                    <input id="publisher" name="publisher" value="{{ old('publisher') }}" size="40">
                    @error('publisher')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="published_year">Tahun Terbit</label></td>
                <td>
                    <input id="published_year" name="published_year" type="number" value="{{ old('published_year') }}">
                    @error('published_year')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="price">Harga</label></td>
                <td>
                    <input id="price" name="price" type="number" step="0.01" value="{{ old('price') }}">
                    @error('price')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="stock">Stok</label></td>
                <td>
                    <input id="stock" name="stock" type="number" value="{{ old('stock') }}">
                    @error('stock')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td valign="top"><label for="description">Deskripsi</label></td>
                <td>
                    <textarea id="description" name="description" rows="4" cols="40">{{ old('description') }}</textarea>
                    @error('description')
                        <br><small>{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                    <a href="{{ route('books.index') }}">Batal</a>
                </td>
            </tr>
        </table>
    </form>
@endsection