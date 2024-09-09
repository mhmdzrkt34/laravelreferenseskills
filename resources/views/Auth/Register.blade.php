<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <form method="POST" action="{{route('Auth.Register')}}">
        @csrf

        <input type="email" name="email" value="{{old("email")}}"/>


        <br>

        @error("email")

        <h1>{{$message}}</h1>
        <br>


        @endif
     

        <input type="password" name="password" value="{{old("password")}}" />

        <br>

        @error("password")

        <h1>{{$message}}</h1>
        <br>


        @endif

  


        <button type="submit">Register</button>
        



    </form>    
    
</body>
</html>