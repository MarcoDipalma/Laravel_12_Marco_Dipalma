<x-layout>

    <!-- Header -->

    <header class="container-fluid">
        <div class="row header">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Dettaglio articolo</h1>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-4">
                <img src="https://picsum.photos/30{{$article['id']}}" alt="immagine casuale">
                </div>

                <div class="col-12 col-md-4">
                    <h3>Servizio di: {{$article['subject']}}</h3>
                    <p class="lead">{{$article['surname'] . ' ' . $article['name']}}</p>

                    <p class="mt-3">
                        {{$article['article']}}
                    </p>

                </div>
            </div>
        </div>
        






    </header>

    <!-- Fine Header -->

</x-layout>