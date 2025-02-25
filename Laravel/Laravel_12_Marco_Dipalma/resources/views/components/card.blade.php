<div class="card mb-3" style="width: 18rem;">
    @if (!$article->img)
        <img src="{{Storage::url('img/defaultimg.jpg')}}" class="card-img-top" alt="immagine casuale">
    @else
        <img src="{{Storage::url($article['img'])}}" class="card-img-top" alt="immagine form">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text text-dark">{{$article['subtitle']}}</p>
        <div class="d-flex">
            @forelse ($article->tags as $tag)
                @if (!$loop->last)
                
                    <a href="{{route('tag.show', compact('tag'))}}" class="link-dark link-underline-opacity-0"> {{$tag->tag}}, </a>
                    <p class="text-white">.</p>
                @else
                    <a href="{{route('tag.show', compact('tag'))}}" class="link-dark link-underline-opacity-0">{{$tag->tag}} </a>
                @endif
            @empty
            @endforelse
        </div>
        <p class="card-text text-dark">{{$article->body}}</p>
        <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>

        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary">Modifica</a>
    </div>
</div>