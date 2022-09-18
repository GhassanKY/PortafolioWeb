<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    @yield('CSS')
    <title>@yield('title')</title>
</head>
<body>
  
    <nav class="navbar bg-light navegacion">
        <div>
          <a class="navbar-brand d-flex flex-row align-items-center" href="{{ route('home') }}" >
          <img src="{{URL::asset('image/GhassanKY.svg')}}" alt="" width="60" class="d-inline-block align-text-top">
            <p>GhassanKY</p>
          </a>
        </div>
        <div class="navegacionLogin">
         <a href=" {{ route('login') }} "><i class="fa-solid fa-user"></i> </a> 
        </div>
      </nav>

      @yield('content')

<script src="https://kit.fontawesome.com/ba10ce0731.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>