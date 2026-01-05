@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div id="container_register">
        <div class="auth_container_login">
            <div class="container_login_header_span">
                <h2 id="header_login_register">Anmelden</h2>
                <span id="span_login_register">Finde dein nächstes Lieblingsprodukt oder verkaufe einfach & schnell!</span>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="container_login">
                    <div class="container_login_icon_input">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6M22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6M22 6L12 13L2 6"
                                stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <label for="email"></label>
                        <input class="design_login_input" type="email" name="email" placeholder="E-Mail" required>
                    </div>

                    <div class="container_login_icon_input">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 11V6.99997C6.99875 5.76002 7.45828 4.56384 8.28937 3.64364C9.12047 2.72344 10.2638 2.14487 11.4975 2.02026C12.7312 1.89565 13.9671 2.23387 14.9655 2.96928C15.9638 3.70469 16.6533 4.78482 16.9 5.99997M5 11H19C20.1046 11 21 11.8954 21 13V20C21 21.1045 20.1046 22 19 22H5C3.89543 22 3 21.1045 3 20V13C3 11.8954 3.89543 11 5 11Z"
                                stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <label for="password"></label>
                        <input class="design_login_input" type="password" name="password" minlength="8" placeholder="Passwort" required>
                    </div>

                </div>
                <div id="container_login_btn">
                    <button type="submit">Anmelden</button>
                </div>
            </form>
            <div id="container_registrieren">
                <span>Noch kein Konto?</span>
                <span id="registrieren"><a href="{{ route('register') }}">Jetzt Registrieren</a></span>
            </div>
        </div>
    </div>
@endsection