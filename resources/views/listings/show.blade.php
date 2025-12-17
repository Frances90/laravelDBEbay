<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel ansehen</title>
</head>

<body>
    <h1>{{ $listing->name }}</h1>
    <p>{{ $listing->beschreibung }}</p>
    <p>Preis: {{ number_format($listing->preis, 2) }} €</p>
    <a href="{{ route('listings.index') }}">Zurück zur Übersicht</a>
</body>

</html>