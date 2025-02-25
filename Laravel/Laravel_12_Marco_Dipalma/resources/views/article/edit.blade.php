<x-layout>

    <div class="container-fluid mt-5">        
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center text-white">Modifica articolo</h1>
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
                <form method="POST" action="{{route('article.update', compact('article'))}}" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input value="{{$article->title}}" type="text" class="form-control" id="title" name="title">
                    </div>
                    
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input value="{{$article->subtitle}}" type="text" class="form-control" id="subtitle" name="subtitle">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{$article->body}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Applica modifiche</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>