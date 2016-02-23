<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

<div class="centerText">
    <h1>

    @if(Session::has('firstName'))
    {{ Session::get('firstName')}}
    @endif
        <br/>
    @if(Session::has('lastName'))
        {{ Session::get('lastName')}}
    @endif
    </h1>
    <br/>
    @if(Session::has('image'))
       <img src="{{Session::get('image')}}" width="200" height="200"/>
    @endif
</div>
<div class="rightTopCorner"><a href="logOut">Log Out</a></div>

</body>
</html>