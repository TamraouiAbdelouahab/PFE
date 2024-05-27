<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/ContentSearch.css') }}">
</head>
<body>
    <x-Header/>
    <x-NavBar/>
    <script src="{{ asset('js/ContentSearch.js') }}"></script>
    <script src="{{ asset('js/HeaderResposive.js') }}"></script>
</body>
</html>

