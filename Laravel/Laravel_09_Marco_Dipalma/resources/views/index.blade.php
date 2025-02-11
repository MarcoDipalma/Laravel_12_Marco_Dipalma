<x-layout>
    
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                
                <h3 class="text-center">
                    Prodotti
                </h3>
            </div>

            <div class="row mt-4 d-flex justify-content-center">

                @foreach ($products as $product)
                
                <div class="col-6 col-md-3">
                    
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="immagine casuale">
                        <div class="card-body">
                            <h5 class="card-title">{{$product['name']}}</h5>
                            <p class="card-text text-b">€{{$product['price']}}</p>
                        </div>
                    </div>
                    
                </div>
                
                @endforeach
                
            </div>

        </div>
    </div>
    
</x-layout>