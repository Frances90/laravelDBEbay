@extends('layouts.app')
@section('title', 'Artikel bearbeiten')

@section('content')
    <div class="background">
        <div class="container_verwalten">
            <div class="verwalten_icon_header">
                <img src="{{ asset('img/pen.svg') }}" alt="Stift zum bearbeiten">
                <h1>Artikel bearbeiten</h1>
            </div>


            <form action="{{ route('listings.update', $listing->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="container_verwalten_label_input_btn">
                    <div class="verwalten_label_input">
                        <label for="name">Titel:</label>
                        <input type="text" id="name" name="name" value="{{ $listing->name }}" required>
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
                        <label for="preis">Preis:</label>
                        <input type="number" id="preis" step="0.01" name="preis" value="{{ $listing->preis }}" required> €
                    </div>
                    <div class="verwalten_label_input">
                        <label for="beschreibung">Beschreibung:</label>
                        <textarea name="beschreibung" id="beschreibung" required>{{ $listing->beschreibung }}</textarea>
                    </div>
                    <div class="container_verwalten_btn">
                        <button type="submit">Änderungen speichern</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection