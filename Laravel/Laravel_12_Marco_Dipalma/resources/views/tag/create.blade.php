<x-layout>

    <div class="container-fluid mt-5">        
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center text-white">Crea Tag</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row vh-100 justify-content-center">
            <div class="col-12 col-md-6">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{route('tag.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="tag" class="form-label">Inserisci la categoria</label>
                      <input type="text" name="tag" value="{{old('tag')}}" class="form-control" id="tag">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>


</x-layout>