<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>This is home page</h1>
    <p>This is home page content</p>

    <ul>
        <li><a href={{ URL::to('/home') }}>Home</a></li>
        <li><a href={{  URL::to('/welcome') }}>Welcome</a></li>
    </ul>

    {{-- <ul>
        <li><a href={{ route('home') }}>Home</a></li>
        <li><a href={{ route('welcome') }}>Welcome</a></li>
    </ul> --}}
</body>
</html>
