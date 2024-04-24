<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'offre de stage</title>
</head>
<body>
<h1>Détail de l'offre de stage</h1>
<h2>{{ $offre->titre }}</h2>
<p>{{ $offre->description }}</p>
</body>
</html>
@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $offre->titre }}</h1>
    <p class="mb-4">{{ $offre->description }}</p>
    <!-- Ajoutez ici d'autres détails de l'offre de stage -->
@endsection
