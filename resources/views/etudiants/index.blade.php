<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
<h1>Liste des étudiants</h1>
<a href="{{ route('etudiants.create') }}">Ajouter un étudiant</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->id }}</td>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->email }}</td>
            <td>{{ $etudiant->telephone }}</td>
            <td>
                <a href="{{ route('etudiants.show', $etudiant) }}">Voir</a>
                <a href="{{ route('etudiants.edit', $etudiant) }}">Modifier</a>
                <form action="{{ route('etudiants.destroy', $etudiant) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
