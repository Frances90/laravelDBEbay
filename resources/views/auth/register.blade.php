@extends('layouts.app')
@section('content')
    <div id="container_register">
        <div class="auth-container">
            <div class="container_header_span">
                <h2 id="header_register">Erstelle ein Konto</h2>
                <span id="span_register">Jetzt kostenlos Registrieren und direkt loslegen!</span>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div id="container_register">
                    <div id="container_mail_pwd">
                        <div class="container_icon_input">

                            <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24 26V23.3333C24 21.9188 23.4205 20.5623 22.3891 19.5621C21.3576 18.5619 19.9587 18 18.5 18H7.5C6.04131 18 4.64236 18.5619 3.61091 19.5621C2.57946 20.5623 2 21.9188 2 23.3333V26M18.5 7.33333C18.5 10.2789 16.0376 12.6667 13 12.6667C9.96243 12.6667 7.5 10.2789 7.5 7.33333C7.5 4.38781 9.96243 2 13 2C16.0376 2 18.5 4.38781 18.5 7.33333Z"
                                    stroke="#1CB1B1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <label for="name"></label>
                            <input class="design_input" type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="container_icon_input">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6M22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6M22 6L12 13L2 6"
                                    stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <label for="email"></label>
                            <input class="design_input" type="email" name="email" placeholder="E-Mail" required>
                        </div>
                        <div class="container_icon_input">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 11V6.99997C6.99875 5.76002 7.45828 4.56384 8.28937 3.64364C9.12047 2.72344 10.2638 2.14487 11.4975 2.02026C12.7312 1.89565 13.9671 2.23387 14.9655 2.96928C15.9638 3.70469 16.6533 4.78482 16.9 5.99997M5 11H19C20.1046 11 21 11.8954 21 13V20C21 21.1045 20.1046 22 19 22H5C3.89543 22 3 21.1045 3 20V13C3 11.8954 3.89543 11 5 11Z"
                                    stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <label for="password"></label>
                            <input class="design_input" type="password" name="password" minlength="8" placeholder="Passwort"
                                required>
                        </div>
                        <div class="container_icon_input">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 11V6.99997C6.99875 5.76002 7.45828 4.56384 8.28937 3.64364C9.12047 2.72344 10.2638 2.14487 11.4975 2.02026C12.7312 1.89565 13.9671 2.23387 14.9655 2.96928C15.9638 3.70469 16.6533 4.78482 16.9 5.99997M5 11H19C20.1046 11 21 11.8954 21 13V20C21 21.1045 20.1046 22 19 22H5C3.89543 22 3 21.1045 3 20V13C3 11.8954 3.89543 11 5 11Z"
                                    stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <label for="password_confirmation"></label>
                            <input class="design_input" type="password" name="password_confirmation"
                                placeholder="Passwort bestätigen" minlength="8" required>
                        </div>
                    </div>
                    <div id="container_adresse">
                        <div class="container_icon_input address_reihe">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 22V12H15V22M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z"
                                    stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <label for="strasse"></label>
                            <input class="design_input strasse" type="text" name="strasse" placeholder="Strasse" required>
                            <label for="hausnummer"></label>
                            <input class="design_input hausnummer" type="number" name="hausnummer" placeholder="Hausnummer" required>
                        </div>
                        <div class="container_icon_input  address_reihe">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 22V12H15V22M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z"
                                    stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <label for="plz"></label>
                            <input class="design_input plz" type="number" name="plz" placeholder="PLZ" required>
                            <label for="ort"></label>
                            <input class="design_input ort" type="text" name="ort" placeholder="Ort" required>
                        </div>
                        <div class="container_icon_input">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_48_639)">
                                    <path
                                        d="M22.0004 16.92V19.92C22.0016 20.1985 21.9445 20.4741 21.8329 20.7293C21.7214 20.9845 21.5577 21.2136 21.3525 21.4018C21.1473 21.5901 20.905 21.7335 20.6412 21.8227C20.3773 21.9119 20.0978 21.945 19.8204 21.92C16.7433 21.5856 13.7874 20.5341 11.1904 18.85C8.77425 17.3146 6.72576 15.2661 5.19042 12.85C3.5004 10.2412 2.44866 7.27097 2.12042 4.17997C2.09543 3.90344 2.1283 3.62474 2.21692 3.3616C2.30555 3.09846 2.44799 2.85666 2.63519 2.6516C2.82238 2.44653 3.05023 2.28268 3.30421 2.1705C3.5582 2.05831 3.83276 2.00024 4.11042 1.99997H7.11042C7.59573 1.9952 8.06621 2.16705 8.43418 2.48351C8.80215 2.79996 9.0425 3.23942 9.11042 3.71997C9.23704 4.68004 9.47187 5.6227 9.81042 6.52997C9.94497 6.8879 9.97408 7.27689 9.89433 7.65086C9.81457 8.02482 9.62928 8.36809 9.36042 8.63998L8.09042 9.90997C9.51398 12.4135 11.5869 14.4864 14.0904 15.91L15.3604 14.64C15.6323 14.3711 15.9756 14.1858 16.3495 14.1061C16.7235 14.0263 17.1125 14.0554 17.4704 14.19C18.3777 14.5285 19.3204 14.7634 20.2804 14.89C20.7662 14.9585 21.2098 15.2032 21.527 15.5775C21.8441 15.9518 22.0126 16.4296 22.0004 16.92Z"
                                        stroke="#1CB1B1" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_48_639">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <label for="telefonnummer"></label>
                            <input class="design_input telefonnummer" type="text" name="telefonnummer" placeholder="Telefonnummer"
                                required>
                        </div>
                    </div>
                </div>
                <div id="container_btn">
                    <button type="submit">Jetzt registrieren!</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection