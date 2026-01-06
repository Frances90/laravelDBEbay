<div class="filter-sidebar">
    <form action="{{ route('Startseite') }}" method="GET">

        <!-- Kategorien -->
        <h3>Kategorien</h3>
        <div class="container_filter">
            @foreach ($categories as $category)
                <label>
                    <input type="radio" name="category" value="{{ $category->id }}" {{ request('category') == $category->id ? 'checked' : '' }}>
                    {{ $category->name }}
                </label>
            @endforeach
        </div>

        <!-- Standort -->
        <h3>Orte</h3>
        <div class="container_filter">
            @foreach ($locations as $location)
                <label>
                    <input type="radio" name="location" value="{{ $location }}" {{ request('location') == $location ? 'checked' : '' }}>
                    {{ $location }}
                </label>
            @endforeach
        </div>

        <!-- Preisbereich -->
        <h3>Preise</h3>
        <div class="container_filter">
        <label><input type="radio" name="price_range" value="0-20" {{ request('price_range') == '0-20' ? 'checked' : '' }}> 0€ - 20€</label>
        <label><input type="radio" name="price_range" value="20-50" {{ request('price_range') == '20-50' ? 'checked' : '' }}> 20€ - 50€</label>
        <label><input type="radio" name="price_range" value="50-200" {{ request('price_range') == '50-200' ? 'checked' : '' }}> 50€ - 200€</label>
        <label><input type="radio" name="price_range" value="200_plus" {{ request('price_range') == '200_plus' ? 'checked' : '' }}> 200€+</label>
        
        <!-- Min-Max Eingabe -->
        <div class="min_max_anzeige">
            <input type="number" name="min_price" placeholder="Min" value="{{ request('min_price') }}">
            <span>bis</span>
            <input type="number" name="max_price" placeholder="Max" value="{{ request('max_price') }}">
        </div>
        </div>

        <!-- Filter-Button -->
        <div class="filter_btn">
            <button type="submit">Filtern</button>
        </div>
    </form>
</div>