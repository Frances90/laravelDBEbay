<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alle Artikel</title>
</head>

<body>
    <h1>Alle Artikel</h1>
    <a href="{{ route('listings.create') }}">Neues Listing erstellen</a>

    @foreach ($listings as $listing)
        <div>
            <h2><a href="{{ route('listings.show', $listing->id) }}">{{ $listing->name }}</a></h2>
            <p>{{ $listing->beschreibung }}</p>
            <p>Preis: {{ number_format($listing->preis, 2) }} €</p>
            <a href="{{ route('listings.edit', $listing->id) }}">Bearbeiten</a>
            <a href="{{ route('listings.show', $listing->id) }}">Ansehen</a>
            <form action="{{ route('listings.destroy', $listing->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Löschen</button>
            </form>
        </div>
    @endforeach
</body>

</html>