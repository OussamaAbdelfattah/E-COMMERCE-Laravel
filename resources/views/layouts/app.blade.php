<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .logo-sidebar {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
            transition: opacity 0.3s ease; /* Animation fluide */
            }

            .logo-sidebar:hover {
            opacity: 0.8; /* Réduire l'opacité au survol */
            }

    </style>
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
