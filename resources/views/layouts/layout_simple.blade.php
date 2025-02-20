<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>@yield('GrandTitre')</h1>
    </header>
    <main>@yield('Contenu')
    </main>
    <footer>
        <p>&copy; 2025 Mon Site. Tous droits réservés.</p>
    </footer>
</body>
</html>
