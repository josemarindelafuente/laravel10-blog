<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href=" {{ route('home') }} ">Cursos Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">




            
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('cursos') }} ">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('curso.create') }} ">Crear Curso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('usuarios') }} ">Usuarios</a>
              </li>

              @guest

              <li class="nav-item">
                <a class="nav-link" href=" {{ route('login') }} ">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('usuarios') }} ">Register</a>
              </li>
                  
              @endguest

              

              @auth
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('logout') }} ">Salir</a> 
              </li>

              
              @endauth
              
            </ul>

            @auth
            <b>{{ Auth::user()->name }} </b>          
            @endauth
            

          

     
            
      
          </div>
        </div>
      </nav>





    <div class="container mt-4">
        @yield('content')
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>