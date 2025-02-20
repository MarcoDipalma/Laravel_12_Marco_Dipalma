<x-layout>
    
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                
                <h3 class="text-center mt-2">
                    Dettaglio articolo : {{$article['title']}}
                </h3>
            </div>

            <div class="row mt-4 d-flex justify-content-center">


                <div class="col-12 col-md-6">
                    @if (!$article->img)
                        <img src="{{Storage::url('img/defaultimg.jpg')}}" class="card-img-top" alt="immagine casuale">
                    @else
                        <img src="{{Storage::url($article['img'])}}" class="card-img-top" alt="immagine form">
                    @endif
                </div>
                
                <div class="col-6 col-md-6 align-items-center">
                    
                    <h2>{{$article['title']}}</h2>
                    <p>{{$article['subtitle']}}</p>
                    <p>{{$article['body']}}</p>
                                            
                </div>
                
                
            </div>

            <div class="row mt-3">
                <form action="{{route('article.delete', compact('article'))}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina articolo</button>
                </form>
            </div>

        </div>
    </div>
    
</x-layout>