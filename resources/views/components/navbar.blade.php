<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Crea articolo</a>
        </li>
        @endauth
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>  

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @auth
          <li>            
            {{Auth::user()->name}}<!-- se l'utente è loggato allora mostra il suo nome-->
          </li>
          <li>
              <form method="post" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-danger">Logout</button>
              </form>
            </li>
          
          @else
           <!-- se l'utente NON è loggato-->
          <li>
          <a href="{{route('login')}}" class="btn btn-success mx-2">Login</a>
          </li>
          <li>
          <a href="{{route('register')}}" class="btn btn-warning">Registrati</a>
          </li>
          @endauth                         
        </ul>
    </div>
  </div>
</nav>