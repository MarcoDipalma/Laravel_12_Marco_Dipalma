<x-layout>

  <!-- Header -->
  
  <header class="container-fluid">
        <div class="row header">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Indice articoli</h1>
            </div>
          </div>


          <div class="container">
            <div class="row align-items-center mt-5">

              @foreach($articles as $article)

              <div class="col-12 col-md-4 mt-4">

                          <div class="card mx-auto" style="width: 18rem;">
                              <img src="https://picsum.photos/30{{$article['id']}}" class="card-img-top" alt="immagine casuale">
                              <div class="card-body">
                                <h5 class="card-title">{{$article['surname'] . ' ' .$article['name']}}</h5>
                                <p class="card-text">Tratta di: {{$article['subject']}}</p>
                                <a href="{{route('dettaglioArticolo', ['subject'=> $article['subject']])}}" class="btn btn-primary">Leggi di più</a>
                              </div>
                          </div>
                    </div>

              @endforeach

            </div>
          </div>



    </header>

    <!-- Fine Header -->
    

  </x-layout>