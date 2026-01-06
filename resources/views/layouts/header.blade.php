<header>
    <nav id="nav_header">
        <a href="{{ route('Startseite') }}">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo der App">
        </a>
        <form action="{{ route('Startseite') }}" method="GET" id="search">
        <div class="container_search">
            <div class="group_inputs" id="input_lupe">
                <img class="icon" src="{{ asset('img/lupe.svg') }}" alt="Lupe für die Suche">
                <input type="text"  id="input_search" name="search" placeholder="Was suchst du?" value="{{ request('search') }}">
            </div>

            <div class="group_inputs">
                <img class="icon" src="{{ asset('img/location.svg') }}" alt="Ort wo der Artikel sich befindet">
                <input name="search_location" type="text" placeholder=" Ort"  value="{{ request('search_location') }}">
            </div>

            <button class="btn_search">Suchen</button>
        </form>
        </div>

        <ul>
            <li>
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('img/profile.svg') }}" alt="Konto des Benutzers">
                </a>
            </li>
            <li>
                <a href="{{ route('listings.create') }}">
                    <img src="{{ asset('img/create_listing.svg') }}" alt="Neue Artikel anlegen">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('img/heart.svg') }}" alt="Favoriten">
                </a>
            </li>
            
        </ul>
    </nav>
</header>