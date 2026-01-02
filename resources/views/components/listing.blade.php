{{-- <div>
    <h2><a href="{{ route('listings.show', $listing->id) }}">{{ $listing->name }}</a></h2>
    <p>{{ $listing->beschreibung }}</p>
    <p>Preis: {{ number_format($listing->preis, 2) }} €</p>
    @if($listing->preis < 100)
        <p>Günstig</p>
    @elseif($listing->preis > 1000)
        <p>Teuer</p>
    @else
        <p>normaler Preis</p>
    @endif
    <a href="{{ route('listings.edit', $listing->id) }}">Bearbeiten</a>
    <a href="{{ route('listings.show', $listing->id) }}">Ansehen</a>
    <form action="{{ route('listings.destroy', $listing->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Löschen</button>
    </form>
</div> --}}