<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des offres de stage</title>
</head>
<body>
<h1>Liste des offres de stage</h1>
<ul>
    @foreach($offres as $offre)
        <li>
            <a href="{{ route('show', $offre) }}">{{ $offre->titre }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>

@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Liste des offres de stage</h1>
    <ul>
        @foreach($offres as $offre)
            <li>
                <a href="{{ route('show', $offre) }}" class="text-blue-500 hover:underline">{{ $offre->titre }}</a>
            </li>
        @endforeach
    </ul>
@endsection
