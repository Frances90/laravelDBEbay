@extends('layouts.app')
@section('title', 'Alle Artikel anzeigen')

@section('content')
    <div class="page-layout">
        <aside class="filter-column">
            <x-filter-sidebar :categories="$categories" :locations="$locations" />
        </aside>
        <div class="container_header_listing">
            <h1>Alle Angebote</h1>

            <div class="container_listings">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
                @if($listings->isEmpty())
                    <p>Keine Anzeigen gefunden.</p>
                @endif
            </div>

        </div>
    </div>
    <div class="container_pagination">
    {{ $listings->links('vendor.pagination.default') }}
    </div>
@endsection