<nav class="navbar navbar-expand-md bg-dark fixed-top">
    <div class="container-fluid bg-dark">
      <a class="navbar-brand text-white" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('article.index')}}">Articoli</a>
          </li>

          @auth
          
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('article.create')}}">Crea Articolo</a>
          </li>
          
          @endauth

          @guest
              
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('register')}}">Registrati</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('login')}}">Accedi</a>
          </li>

          @endguest

          @auth
          
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="nav-link text-white" type="submit">
                Logout
              </button>
              </form>
          </li>
              
          @endauth
        </ul>
      </div>
    </div>
  </nav>