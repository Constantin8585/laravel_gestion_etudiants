<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un étudiant</title>
</head>
<body>
<h1>Ajouter un étudiant</h1>
<form action="{{ route('etudiants.store') }}" method="POST">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>
    <br>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="telephone">Téléphone :</label>
    <input type="text" name="telephone" id="telephone" required>
    <br>
    <button type="submit">Ajouter</button>
</form>
</body>
</html>
