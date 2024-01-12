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
        .error{
            color:red;
        }
        .input-error{
            border:1px solid red;
        }
    </style>

</head>
<body>
    <h2>Write contact information with bellow form</h2>

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif --}}

    <form action="{{ route('contact_store') }}" method="post">
        @csrf
        <div>
            <div class="mb_10">
                <label for="">Name</label> <br>
                <input type="text" name="name" id="name" placeholder="Write your name here" value="{{ old('name') }}" class="@error('name')
                    input-error
                @enderror">
                <br>
                @error('name')
                   <small class="error"> {{ $message }}</small>
                @enderror
            </div>
            <div class="mb_10">
                <label for="">Date of birth</label> <br>
                <input type="text" name="dob" id="dob" placeholder="Write your dob here" value="{{ old('dob') }}" class="@error('dob')
                    input-error
                @enderror">
                <br>
                @error('dob')
                   <small class="error"> {{ $message }}</small>
                @enderror
            </div>
            <div class="mb_10">
                <label for="">Phone</label> <br>
                <input type="text" name="phone" id="phone" placeholder="Write your phone here" value="{{ old('phone') }}" class="@error('phone')
                    input-error
                @enderror">
                <br>
                @error('phone')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb_10">
                <label for="">Email</label> <br>
                <input type="text" name="email" id="email" placeholder="Write your email here" value="{{ old('email') }}" class="@error('email')
                    input-error
                @enderror">
                <br>
                @error('email')
                    <small class="error">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb_10">
                <label for="">Message</label> <br>
                <textarea name="message" id="message" placeholder="Write your message here" cols="30" rows="5" class="@error('message')
                 input-error
                @enderror">{{ old('message') }}</textarea>
                <br>
                @error('message')

                <small class="error">{{ $message }}</small>

                @enderror
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
