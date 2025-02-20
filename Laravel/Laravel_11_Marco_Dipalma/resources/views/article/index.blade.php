<x-layout>
    
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                
                <h3 class="text-center mt-2">
                    Articoli
                </h3>
            </div>

            <div class="row mt-4 d-flex justify-content-center">

                @foreach ($articles as $article)
                
                <div class="col-6 col-md-3">
                    
                    <div class="card mb-3" style="width: 18rem;">
                        @if (!$article->img)
                        <img src="{{Storage::url('img/defaultimg.jpg')}}" class="card-img-top" alt="immagine casuale">
                        @else
                        <img src="{{Storage::url($article['img'])}}" class="card-img-top" alt="immagine form">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$article['title']}}</h5>
                            <p class="card-text text-b">{{$article['subtitle']}}</p>
                            <p class="card-text text-b">{{$article['body']}}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>

                            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary">Modifica</a>
                        </div>
                    </div>
                    
                </div>
                
                @endforeach
                
            </div>

        </div>
    </div>
    
</x-layout>