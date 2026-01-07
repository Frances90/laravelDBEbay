@extends('layouts.app')
@section('title', 'Artikel bearbeiten')

@section('content')
    <div class="background">
        <div class="container_verwalten">
            <div class="verwalten_icon_header">
                <img src="{{ asset('img/pen.svg') }}" alt="Stift zum bearbeiten">
                <h1>Artikel bearbeiten</h1>
            </div>

            <h3>Bestehende Bilder</h3>
            <div class="image-gallery">
                @foreach ($listing->images as $image)
                    <div class="image-item">
                        <img class="edit_image_size" src="{{ asset('storage/listing_images/' . $image->image_path) }}" alt="Artikel Bild">
                        @if ($listing->images->count() > 1)
                            <form action="{{ route('listings.images.delete', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="edit_delete_icon" type="submit">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 3.99992H3.33333M3.33333 3.99992H14M3.33333 3.99992V13.3333C3.33333 13.6869 3.47381 14.026 3.72386 14.2761C3.97391 14.5261 4.31304 14.6666 4.66667 14.6666H11.3333C11.687 14.6666 12.0261 14.5261 12.2761 14.2761C12.5262 14.026 12.6667 13.6869 12.6667 13.3333V3.99992M5.33333 3.99992V2.66659C5.33333 2.31296 5.47381 1.97382 5.72386 1.72378C5.97391 1.47373 6.31304 1.33325 6.66667 1.33325H9.33333C9.68696 1.33325 10.0261 1.47373 10.2761 1.72378C10.5262 1.97382 10.6667 2.31296 10.6667 2.66659V3.99992M6.66667 7.33325V11.3333M9.33333 7.33325V11.3333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </form>
                        @endif
                    </div>
                @endforeach
            </div>

            <div>
                <h3>Neue Bilder hinzufügen</h3>
                <form class="edit_form" action="{{ route('listings.images.update', $listing->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input id="file-upload" type="file" name="images[]" multiple required>
                    <button type="submit">Bilder hochladen</button>
                </form>
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