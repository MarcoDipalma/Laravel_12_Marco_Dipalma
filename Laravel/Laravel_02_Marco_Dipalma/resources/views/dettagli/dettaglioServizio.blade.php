<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selfwork Rotte Paremetriche</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body class="bg-secondary">

    <!-- Navbar -->

    <nav id="navbar" class="navbar navbar-expand-lg bg-dark">
        <div id="collapse" class="container-fluid bg-dark">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('chiSiamo')}}">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('servizi')}}">
                  Servizi
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- fine Navbar -->


    <!-- Header -->

    <header class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center text-white mt-2 mb-5"> Dettaglio</h1>
                <h2 class="text-center text-white mt-2 mb-5"> {{$reporter['surname'] . ' ' . $reporter['name']}} </h1>

            </div>

            <div class="col-12 col-md-4">
                <img src="https://picsum.photos/30{{$reporter['id']}}" alt="immagine casuale">
            </div>

            <div class="col-12 col-md-4">
                <h3>{{$reporter['article']}}</h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ducimus aperiam ex voluptatum quos sapiente veritatis tenetur corporis eveniet et maiores enim sunt error, necessitatibus explicabo suscipit, beatae molestias optio?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni eos perspiciatis quae tempore? Aliquam, odio cum corporis libero veritatis sapiente, veniam error voluptatum voluptate ullam sed dignissimos inventore eveniet autem.
                </p>
            </div>

        </div>

        

    </header>

    <!-- Fine Header -->




    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>