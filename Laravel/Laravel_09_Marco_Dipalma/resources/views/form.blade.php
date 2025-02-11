<x-layout>
    
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                
                <h3 class="text-center">
                    Compila i campi richiesti
                </h3>

                <form method="POST" action="{{route('product.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="flaot" class="form-control" id="price" name="price">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    
</x-layout>