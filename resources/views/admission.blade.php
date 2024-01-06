<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission</title>
</head>
<body>
    <h2>Admission Form</h2>
    <form action="/admission/store" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="mobile">Mobile</label>
            <br>
            <input type="text" name="mobile" id="mobile">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
