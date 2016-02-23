<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>



       <div class="form-group center">
          <h1> Registration</h1>
       {!! Form::open(array('route' => 'register', 'files' => true)) !!}
       <label>FirstName</label>
       {!! Form::text('firstName')!!}

       <label>LastName</label>
       {!! Form::text('lastName') !!}

       <label>Email</label>
       {!! Form::text('email') !!}

       <label>Password</label>
       {!! Form::password('password') !!}

       <label>Confirm Password</label>
       {!! Form::password('cPassword') !!}

       <label>Upload Image</label>
       {!! Form::file('image') !!}

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
