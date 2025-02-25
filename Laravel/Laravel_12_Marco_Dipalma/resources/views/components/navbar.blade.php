<nav class="navbar navbar-expand fixed-top bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-dark" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('article.create')}}">Crea articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('article.index')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('tag.create')}}">Aggiungi Tag</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('tag.index')}}">Tag</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>