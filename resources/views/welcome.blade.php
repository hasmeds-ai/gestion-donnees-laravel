<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur l’application gestion_donnees</h1>
    <p><a href="{{ route('contacts.create') }}">Aller au formulaire</a></p>
    <p><a href="{{ route('contacts.index') }}">Voir la liste des données</a></p>
</body>
</html>