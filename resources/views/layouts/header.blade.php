<header>
    <nav id="nav_header">
        <a href="{{ route('listings.index') }}">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo der App">
        </a>
        
        <div class="container_search">
            <div class="group_inputs" id="input_lupe">
                <img class="icon" src="{{ asset('img/lupe.svg') }}" alt="Lupe für die Suche">
                <input type="text" placeholder="Was suchst du?" id="input_search" />
            </div>

            <div class="group_inputs">
                <img class="icon" src="{{ asset('img/location.svg') }}" alt="Ort wo der Artikel sich befindet">
                <input type="text" placeholder="PLZ oder Ort" />
            </div>

            <button class="btn_search">Suchen</button>
        </div>

        <ul>
            <li>
                <a href="#">
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