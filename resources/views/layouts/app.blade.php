<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        <h1>ciao sono il main</h1>
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
