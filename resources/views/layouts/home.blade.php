<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
    <!-- <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" /> -->
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
    crossorigin="anonymous"> 
    <!-- icon -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Manjari|Mansalva|Rubik&display=swap" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>
</head>
<body>

  @include('layouts.homenavbar')

            @yield('content')
      
<footer>
<br>
<br>
</footer>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>   
        <script src="{{url('js/bootstrap.min.js')}}"></script> -->

        <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

        @yield('script')

</body>
</html>