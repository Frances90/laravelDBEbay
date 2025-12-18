<footer>
    <div id="container_verwalten">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo der App">
        <div class="container_layout" id="container_unternehmen">
            <h2>Unternehmen</h2>
            <a href="#">Über uns</a>
            <a href="#">Karriere</a>
            <a href="#">Newsletter</a>
            <a href="#">Hilfebereich</a>
        </div>
        <div class="container_layout" id="container_rechtliches">
            <h2>Rechtliches</h2>
            <a href="#">Impressum</a>
            <a href="#">Datenschutz</a>
            <a href="#">AGB</a>
        </div>
        <div>
            <div class="social_media">
                <h2>Social Media</h2>
                <div id="icons_sm">
                <a class="link_sm" href="#">
                    <img class="icon" src="{{ asset('img/instagram.svg') }}" alt="Instagram Icon">
                </a>
                <a class="link_sm" href="#">
                    <img class="icon" src="{{ asset('img/facebook.svg') }}" alt="Facebook Icon">
                </a>
                <a class="link_sm" href="#">
                    <img class="icon" src="{{ asset('img/youtube.svg') }}" alt="YouTube Icon">
                </a>
                <a class="link_sm" href="#">
                    <img class="icon" src="{{ asset('img/tiktok.svg') }}" alt="TikTok Icon">
                </a>
                </div>
            </div>
            <p>&copy; {{ date('Y') }} DBEbay. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</footer>