@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <p class="eyebrow">Studi Kasus Praktikum</p>
        <h1>Katalog Buku Kampus</h1>
        <p>
            Aplikasi sederhana untuk mempelajari alur MVC, routing,
            Eloquent ORM, validasi, dan operasi CRUD pada Laravel 13.
        </p>
        <a class="button primary" href="{{ route('books.index') }}">
            Kelola Data Buku
        </a>
    </section>
@endsection