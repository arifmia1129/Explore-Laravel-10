<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <style>
        .err{
            color:red;
        }
        .input-err{
            border: 1px solid red;
        }
    </style>

</head>
<body>
    <h2>Create Post</h2>
    <form action="{{ route('post_store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <br>
            <input type="text" name="title" id="title" placeholder="Write post title here" class="@error('title')
            input-err
            @enderror">
            <br>
            @error('title')
                <small class="err">{{ $message }}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <br>
            <textarea name="description" id="description" cols="25" rows="5" placeholder="Write here post description" class="@error('description')
                input-err
            @enderror"></textarea>
            <br>
            @error('description')
                <small class="err">{{ $message }}</small>
            @enderror
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
