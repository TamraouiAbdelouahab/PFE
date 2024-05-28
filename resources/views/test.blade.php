<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <h1>connected</h1>
    @endauth
    @guest
        <h1>no conneted</h1>
    @endguest
        @if(auth()->guard('client')->check())
        <p>{{ auth()->guard('client')->user()->id }}</p>
        @else
            <p>No</p>
        @endif
</body>
</html>
