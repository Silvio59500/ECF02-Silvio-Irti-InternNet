<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription de l'entreprise</title>
</head>
<body>
<h1>Inscription de l'entreprise</h1>
<!-- Formulaire d'inscription de l'entreprise -->
<form action="{{ route('inscription.store') }}" method="POST">
    @csrf
    <label for="nom">Nom de l'entreprise :</label><br>
    <input type="text" id="nom" name="nom"><br><br>
    <!-- Ajoutez d'autres champs pour les détails de l'entreprise -->
    <button type="submit">S'inscrire</button>
</form>
</body>
</html>

