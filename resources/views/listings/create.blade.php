@extends('layouts.app')
@section('title', 'Artikel erstellen')

@section('content')

    <h1>Neuen Artikel erstellen</h1>
    <form action="{{ route('listings.store') }}" method="POST">
        {{-- Fügt ein CSRF-Token hinzu, um die Sicherheit zu gewährleisten. --}}
        @csrf 
        <input type="hidden" name="customer_id" value="1">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Beschreibung:</label>
        <textarea name="beschreibung" required></textarea>
        <label>Preis:</label>
        <input type="number" step="0.01" name="preis" required>
        <button type="submit">Erstellen</button>
    </form>
    <a href="{{ route('Startseite') }}">Zurück</a>
@endsection