@extends('layouts.app')
@section('content')
    <div class="profile-container">
        <div id="container_profildetails_passwort">
            <div id="container_profil">
                <div class="header_profildetails">
                    <h2>Profil-Infos</h2>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="container_btn_profildetails">
                            <div class="container_profildetails">
                                <div id="profil_daten">
                                    <div class="container_input_label">
                                        <label for="name">Benutzername:</label>
                                        <input type="text" name="name" value="{{ auth()->user()->name }}" required>
                                    </div>
                                    <div class="container_input_label">
                                        <label for="email">E-Mail:</label>
                                        <input type="email" name="email" value="{{ auth()->user()->email }}" required>
                                    </div>
                                    <div class="container_input_label">
                                        <label for="telefonnummer">Telefonnummer:</label>
                                        <input type="text" name="telefonnummer" value="{{ auth()->user()->telefonnummer }}"
                                            required>
                                    </div>
                                </div>
                                <div id="container_adresse">
                                    <div>
                                        <span id="adresse">Adresse:</span>
                                    </div>
                                    <div id="profil_adresse">
                                        <label for="plz"></label>
                                        <input type="text" name="plz" value="{{ auth()->user()->plz }}" required>
                                        <label for="ort"></label>
                                        <input type="text" name="ort" value="{{ auth()->user()->ort }}" required>
                                        <label for="strasse"></label>
                                        <input type="text" name="strasse" value="{{ auth()->user()->strasse }}" required>
                                        <label for="hausnummer"></label>
                                        <input type="text" name="hausnummer" value="{{ auth()->user()->hausnummer }}"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="container_profil_btn">
                                <button type="submit">Speichern</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <div class="header_profil_passwort">
                    <h2>Passwort ändern</h2>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="container_passwort">
                            <div id="profil_passwort">
                                <div class="container_input_label_pw">
                                    <label for="altes_passwort">Altes Passwort:</label>
                                    <input type="password" name="altes_passwort" required>
                                </div>
                                <div class="container_input_label_pw">
                                    <label for="neues_passwort">Neues Passwort:</label>
                                    <input type="password" name="neues_passwort" required>
                                </div>
                                <div class="container_input_label_pw">
                                    <label for="password_confirmation">Neues Passwort bestätigen:</label>
                                    <input type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="container_profil_btn">
                                <button type="submit">Passwort ändern</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="container_anzeigen_listings">
            <div id="container_anzeigen">
                <h2>Meine Anzeigen</h2>
            </div>
            <div id="container_eigene_anzeigen">
                <div class="listings">
                    @if (auth()->user()->listings->count() > 0)
                        @foreach (auth()->user()->listings as $listing)

                            <div class="container_profil_listings">
                                <x-listing-card :listing="$listing" />

                                <div class="tools">
                                    <a class="position_icon bearbeiten_a" href="{{ route('listings.edit', $listing->id) }}"><img
                                            class="icon_listing" src="img/pen.svg" alt="Icon zum Bearbeiten">bearbeiten</a>

                                    <form method="POST" action="{{ route('listings.destroy', $listing->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="position_icon delete_btn" type="submit"><img class="icon_listing"
                                                src="img/trash.svg" alt="Icon zum Löschen">löschen</button>
                                    </form>
                                </div>

                            </div>
                        @endforeach
                    @else
                        Du hast keine Anzeigen geschaltet.
                    @endif
                </div>
            </div>
        </div>
        <div id="container_favoriten">
            <h2>Meine Favoriten</h2>
            <div class="favorites">
                @if (auth()->user()->favorites->count() > 0)
                    @foreach (auth()->user()->favorites as $listing)
                        <x-listing-card :listing="$listing" />
                    @endforeach
                @else
                    Du hast keine Favoriten festgelegt.
                @endif
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-danger">Logout</button>
        </form>

    </div>
@endsection