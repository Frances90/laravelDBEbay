@extends('layouts.app')
@section('title', 'Alle Artikel anzeigen')

@section('content')

    <h1>Alle Artikel</h1>
    <a href="{{ route('listings.create') }}">Neuen Eintrag hinzufügen</a>

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
@endsection