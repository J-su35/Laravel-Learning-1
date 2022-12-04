<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
</head>
<body>
    <?php
    $admin = "Boy";
    $arr = array("Home", "Member", "About", "Contact");
    ?>

<h1>Welcome admin {{$admin}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam iure voluptatum possimus dolores nisi quos, ut commodi suscipit voluptas ab libero beatae quis exercitationem perferendis magnam pariatur error minus?</p>

<h1>Hello {{$admin}}</h1>

@if($admin == "Boy")
    <h2>What's up?</h2>
@else
    echo <h2>How are you?</h2>
@endif

@foreach($arr as $menu)
    <a herf="">{{$menu}}</a>
@endforeach

<ui>
    @for($i=1;$i<=5;$i++)
        <p>{{$i}}</i>
    @endfor
</ui>
</body>
</html>