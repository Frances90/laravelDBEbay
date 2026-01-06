@extends('layouts.app')
@section('title', 'Artikel erstellen')

@section('content')
    <div class="background">
        <div class="container_verwalten">
                <div class="verwalten_icon_header">
                    <img src="{{ asset('img/create_listing.svg') }}" alt="Stift zum bearbeiten">
                    <h1>Neue Anzeige</h1>
                </div>

            
            <form action="{{ route('listings.store') }}" method="POST">
                {{-- Fügt ein CSRF-Token hinzu, um die Sicherheit zu gewährleisten. --}}
                @csrf
                <div class="container_verwalten_label_input_btn">
                    <input type="hidden" name="customer_id" value="1">
                    <div class="verwalten_label_input">
                        <label>Titel:</label>
                        <input type="text" name="name" placeholder="Mein Artikel" required>
                    </div>
                    <div class="verwalten_label_input">
                        <label for="category_id">Kategorie:</label>
                        <select name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="verwalten_label_input">
                        <label>Preis:</label>
                        <input type="number" id="preis" step="0.01" name="preis" placeholder="..." required>€
                    </div>
                    <div class="verwalten_label_input">  
                        <label>Beschreibung:</label>
                        <textarea name="beschreibung" required placeholder="Beschreibe deinen Artikel"></textarea>
                    </div>        
                    <div class="container_verwalten_btn">
                        <button type="submit">Erstellen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection