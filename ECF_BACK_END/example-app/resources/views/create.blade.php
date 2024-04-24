<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une offre de stage</title>
</head>
<body>
<h1>Créer une offre de stage</h1>
<!-- Formulaire de création d'une offre de stage -->
<form action="{{ route('offres.store') }}" method="POST">
    @csrf
    <label for="titre">Titre de l'offre :</label><br>
    <input type="text" id="titre" name="titre"><br><br>
    <label for="description">Description :</label><br>
    <textarea id="description" name="description"></textarea><br><br>
    <button type="submit">Publier l'offre</button>
</form>
</body>
</html>

