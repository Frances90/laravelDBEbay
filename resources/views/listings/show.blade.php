@extends('layouts.app')
@section('title', 'Artikel ansehen')
@vite(['resources/css/details.css'])
@section('content')
<div id="container_center">
    <div class="container_details">
        <div class="container_images_details">
            <div class="container_images_hauptbild">
                <div class="container_images">
                    @for ($i = 1; $i < 5; $i++)
                        @if (isset($listing->images[$i]))
                        <div class="container_image_artikel_details">
                                <img class="image_artikel_details" src="{{ asset('storage/listing_images/' . $listing->images[$i]->image_path) }}"
                                alt="Artikel Bild {{ $i }}">
                        </div>
                        @endif
                    @endfor
                </div>
                <div class="container_hauptbild">
                    <img class="image_artikel_hauptbild"
                        src="{{ asset('storage/listing_images/' . $listing->images[0]->image_path) }}" alt="Artikelbild">
                </div>
            </div>
            <div class="container_details_favorites">
                <div class="container_details_preis">
                    <div class="container_icon_details">
                        <img class="icon_details" src="{{ asset('img/profile.svg') }}" alt="Verkäufer">
                        <span class="subheaders">Angeboten von:</span>
                    </div>
                    <span class="subdetails">{{$listing->customer->name}}</span>

                    <div class="container_icon_details">
                        <img class="icon_details" src="{{ asset('img/location_black.svg') }}" alt="Standort">
                        <span class="subheaders">Adresse:</span>
                    </div>

                    <span class="subdetails">{{$listing->customer->strasse}} {{ $listing->customer->hausnummer }}</span>
                    <span class="subdetails">{{$listing->customer->plz}} {{$listing->customer->ort}}</span>
                    <span class="subdetails mail">{{$listing->customer->email}}</span>

                    <div class="container_icon_details">
                        <img class="icon_details" src="{{ asset('img/euro.svg') }}" alt="Euro">
                        <span class="subheaders">Adresse:</span>
                    </div>

                    <span class="subdetails preis_details">{{ number_format($listing->preis, 2) }} €</span>
                </div>

                <form action="{{ route('listings.favorite', $listing->id) }}" method="POST">
                    <div class="container_favorite">
                        @csrf
                        <button class="container_btn" type="submit">
                            @if(auth()->user() && auth()->user()->favorites->contains($listing->id))
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 28 24" fill="red">
                                    <title>heart</title>
                                    <path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                </svg>
                                Aus Favoriten entfernen
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 28 24" fill="none">
                                <title>heart-outline</title>
                                <path d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" 
                                fill="red"/>
                            </svg> Zu Favoriten hinzufügen
                            @endif
                        </button>
                    </div>
                </form>
            </div>

        </div>


            <div class="container_beschreibung">
                <h1>{{ $listing->name }}</h1>

                <div class="datum">
                    <img class="icon_details" src="{{ asset('img/calender.svg') }}" alt="Verkäufer">
                    <span>{{$listing->created_at->format('d.m.Y') }}</span>
                </div>
                <div class="beschreiung_favorite">
                    <img class="icon_details" src="{{ asset('img/people.svg') }}" alt="Interesssierte Personen">
                    <span>{{$listing->favorites->count()}} Person/en interessiert</span>
                </div>

                <p>{{ $listing->beschreibung }}</p>
                <p>
                    <a href="{{ route('Startseite') }}">Zurück zur Übersicht</a>
                </p>
            </div>



    </div>
</div>
@endsection