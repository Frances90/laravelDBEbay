<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'DBEBay')</title>

    @vite(['resources/css/header.css', 
                        'resources/css/footer.css', 
                        'resources/css/listing.css', 
                        'resources/css/login.css', 
                        'resources/css/register.css', 
                        'resources/css/profil.css', 
                        'resources/css/verwalten_listing.css', 
                        'resources/css/filter.css',
                        'resources/css/pagination.css'
    ])

</head>

<body>
    <x-flash-message></x-flash-message>
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>