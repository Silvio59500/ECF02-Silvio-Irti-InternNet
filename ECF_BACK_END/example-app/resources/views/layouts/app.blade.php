<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternNet</title>
    <!-- Inclure Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<!-- Barre de navigation -->
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto">
        <a href="{{ route('welcome') }}" class="text-white font-bold">InternNet</a>
    </div>
</nav>

<!-- Contenu de la page -->
<div class="container mx-auto mt-4">
    @yield('content')
</div>
</body>
</html>
