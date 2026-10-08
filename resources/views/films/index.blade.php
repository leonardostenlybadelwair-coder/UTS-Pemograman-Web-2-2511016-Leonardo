@forelse ($films as $film)
    <tr>
        <td>{{ $films->firstItem() + $loop->index }}</td>
        <td>{{ $film->title }}</td>
        <td>{{ $film->director }}</td>
        <td>{{ $film->release_year }}</td>
        <td>
            <a href="{{ route('films.show', $film) }}">Detail</a>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5">Data belum tersedia.</td>
    </tr>
@endforelse
@if ($films->hasPages())
    <nav>
        @if ($films->onFirstPage())
            <span>Sebelumnya</span>
        @else
            <a href="{{ $films->previousPageUrl() }}">Sebelumnya</a>
        @endif

        <span>
            Halaman {{ $films->currentPage() }}
            dari {{ $films->lastPage() }}
        </span>

        @if ($films->hasMorePages())
            <a href="{{ $films->nextPageUrl() }}">Berikutnya</a>
        @endif
    </nav>
@endif