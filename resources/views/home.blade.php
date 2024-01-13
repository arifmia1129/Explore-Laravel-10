<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div>
        <img src="{{ asset('/storage/uploads/new_image.png') }}" alt="image" style="width: 300px">
    </div>
    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="file" name="my_file" id="my_file">
    <button type="submit">Submit</button>
    </form>
</body>
</html>
