<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aboutUs</title>
</head>
<body>
    <h1>About Us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam iure voluptatum possimus dolores nisi quos, ut commodi suscipit voluptas ab libero beatae quis exercitationem perferendis magnam pariatur error minus?</p>
    
    <!-- <a href="/">Home</a>
    <a href="/admin">Admin</a>
    <a href="/member">Member</a>
    <a href="/about">About</a> -->

    <!-- submit value to view 1)associate array -->
    <p>{{$address}}</p>
    <p>{{$phone}}</p>
    <p>{{$email}}</p>

    <p>{{$status}}</p>

    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/admin')}}">Admin</a>
    <a href="{{route('member')}}">Member</a>
    <a href="{{url('/about')}}">About</a>
</body>
</html>