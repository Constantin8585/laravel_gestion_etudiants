<!DOCTYPE html>
<html>
<head>
    <title>Accueil - Gestion des Étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }
        .welcome-container {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="welcome-container">
    <h1 class="mb-4">Bienvenue à la Gestion des Étudiants</h1>
    <p class="mb-4">Bienvenue dans votre application de gestion des étudiants. Vous pouvez ajouter, modifier, supprimer et visualiser les détails des étudiants.</p>
    <a href="{{ route('etudiants.index') }}" class="btn btn-primary btn-lg">Accéder à la Gestion des Étudiants</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+2mg2yD/QpDIPw/0SV1LGIHqxK2hK" crossorigin="anonymous"></script>
</body>
</html>
