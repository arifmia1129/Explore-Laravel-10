<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>

    <style>
        .mb_10{
            margin-bottom: 10px;
        }
    </style>

</head>
<body>
    <h2>Write contact information with bellow form</h2>
    <form action="{{ route('contact_store') }}" method="post">
        @csrf
        <div>
            <div class="mb_10">
                <label for="">Name</label> <br>
                <input type="text" name="name" id="name" placeholder="Write your name here">
            </div>
            <div class="mb_10">
                <label for="">Phone</label> <br>
                <input type="text" name="phone" id="phone" placeholder="Write your phone here">
            </div>
            <div class="mb_10">
                <label for="">Email</label> <br>
                <input type="text" name="email" id="email" placeholder="Write your email here">
            </div>
            <div class="mb_10">
                <label for="">Email</label> <br>
                <textarea name="message" id="message" placeholder="Write your message here" cols="30" rows="5"></textarea>
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
