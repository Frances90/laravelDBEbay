@extends('layouts.app')
@section('title', 'Alle Artikel anzeigen')

@section('content')
    <div class="container_header_listing">
        <h1>Alle Angebote</h1>

        <div class="container_listings">
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        </div>
    </div>
@endsection