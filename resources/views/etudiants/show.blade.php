<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Détails de l'étudiant</h1>
    <div class="card">
        <div class="card-header">
            Étudiant #{{ $etudiant->id }}
        </div>
        <div class="card-body">
            <p><strong>Nom :</strong> {{ $etudiant->nom }}</p>
            <p><strong>Prénom :</strong> {{ $etudiant->prenom }}</p>
            <p><strong>Email :</strong> {{ $etudiant->email }}</p>
            <p><strong>Téléphone :</strong> {{ $etudiant->telephone }}</p>
            <a href="{{ route('etudiants.index') }}" class="btn btn-primary mt-3">Retour à la liste</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+2mg2yD/QpDIPw/0SV1LGIHqxK2hK" crossorigin="anonymous"></script>
</body>
</html>
