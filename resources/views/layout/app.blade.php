<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article App</title>
    @vite(['resources/js/app.js'])

</head>
<body>
<form action="{{route('logout')}}" method="POST">
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <div class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{('./')}}">Home</a>
      </div>


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            
          </li> --}}
          @auth

        <a href="{{route('login')}}" class="p-2 nav-link">{{auth()->user()->name}}</a>
          @endauth


          @guest
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('register')}}">Signup</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">Login</a>
          </li>
          
          @endguest
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('logout')}}">Logout</a>
          </li>
        

        </ul>
      </div>
    </div>
  </nav>
</form>

     @yield('content')


</body>
</html>