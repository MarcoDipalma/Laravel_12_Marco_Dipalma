<div class="card mb-3" style="width: 18rem;">
    @if (!$article->img)
    <img src="{{Storage::url('img/defaultimg.jpg')}}" class="card-img-top" alt="immagine casuale">
    @else
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagine form">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text text-b">{{$article['subtitle']}}</p>
        <p class="card-text text-b">Scritto da: {{$article->user->name}}</p>
        <p class="card-text text-b">{{$article->body}}</p>
        <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>

        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary">Modifica</a>
    </div>
</div>