<!DOCTYPE html>
<html>
<head>
    <title>Modifier un étudiant</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
<h1>Modifier un étudiant</h1>
<form action="{{ route('etudiants.update', $etudiant) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="{{ $etudiant->nom }}" required>
    <br>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="{{ $etudiant->prenom }}" required>
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="{{ $etudiant->email }}" required>
    <br>
    <label for="telephone">Téléphone :</label>
    <input type="text" name="telephone" id="telephone" value="{{ $etudiant->telephone }}" required>
    <br>
    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
