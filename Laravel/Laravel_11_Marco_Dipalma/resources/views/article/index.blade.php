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
                    
                    <x-card :article=$article></x-card>
                    
                </div>
                
                @endforeach
                
            </div>

        </div>
    </div>
    
</x-layout>