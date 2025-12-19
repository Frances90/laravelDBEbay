<div class="listing">
    <div class="container_image" >
    <img class="image_artikel" src="{{ asset('storage/listing_images/'.$listing->images[0]->image_path) }}" alt="Artikelbild">
    </div>
    <div class="container_linie"></div>
    <h2 class="header">
        <a class="header_artikel" href="{{ route('listings.show', $listing->id) }}">{{ $listing->name}}</a>
    </h2>
    <div class="container_ort_preis">
        <div class="icon_ort">
            <img src="{{ asset('img/location.svg') }}" alt="Ort wo der Artikel sich befindet">
            <span>Berlin</span>
        </div>
        <p class="preis">{{ number_format($listing->preis, 2) }} €</p>
    </div>

</div>