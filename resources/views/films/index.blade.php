<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>

    <h1>Daftar Film</h1>

    <ul>
        @forelse ($films as $film)
            <li>
                <strong>{{ $film['title'] }}</strong><br>
                Sutradara: {{ $film['director'] }}<br>
                Tahun: {{ $film['year'] }}<br>
                ID: {{ $film['id'] }}
            </li>
            <br>
        @empty
            <li>Data film belum tersedia.</li>
        @endforelse
    </ul>

</body>
</html>