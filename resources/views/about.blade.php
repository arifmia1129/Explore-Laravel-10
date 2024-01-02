<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>User name is: {{ $name }}</h1>
    <h1>User gender is: {{ $gender }}</h1>

    <ul>
        <li><a href={{ route('home') }}>Home</a></li>
        <li><a href={{ route('welcome') }}>Welcome</a></li>
    </ul>
</body>
</html>
