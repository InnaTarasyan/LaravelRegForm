<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="form-group center">
    <h1> Login</h1>
    {!! Form::open(array('route' => 'login')) !!}
    <label>Email</label>
    {!! Form::text('email') !!}
    <label>Password</label>
    {!! Form::password('password')!!}
    {!! Form::submit("Submit") !!}
    {!! Form::close() !!}
</div>
<div class="userErrors">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>

</body>
</html>