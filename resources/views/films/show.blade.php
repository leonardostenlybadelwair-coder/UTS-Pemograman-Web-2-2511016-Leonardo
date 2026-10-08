@extends('layouts.app')

@section('title', 'Detail Film')

@section('content')
    <h1>{{ $film->title }}</h1>
    <dl>
        <dt>Sutradara</dt>
        <dd>{{ $film->director }}</dd>
        <dt>Tahun</dt>
        <dd>{{ $film->release_year }}</dd>
    </dl>
    <a href="{{ route('films.index') }}">Kembali</a>
@endsection