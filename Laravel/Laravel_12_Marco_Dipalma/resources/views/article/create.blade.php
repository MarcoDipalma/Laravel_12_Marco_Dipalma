<x-layout>

    <div class="container-fluid mt-5">        
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center text-white">Crea articolo</h1>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input value="{{old('title')}}" type="text" class="form-control" id="title" name="title">
                    </div>
                    
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input value="{{old('subtitle')}}" type="text" class="form-control" id="subtitle" name="subtitle">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{old('body')}}</textarea>
                    </div>

                    <div class="mb-3">
                        @foreach ($tags as $tag)
                            <input type="checkbox" id="{{'tagCheck' . $tag->id}}" name="tags[]" value="{{$tag->id}}">
                            <label for="{{'tagCheck' . $tag->id}}">{{$tag->tag}}</label>
                        @endforeach
                        <p>Altro: <a href="{{route('tag.create')}}">Aggiungi Tag</a></p>
                    </div>
                    
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>