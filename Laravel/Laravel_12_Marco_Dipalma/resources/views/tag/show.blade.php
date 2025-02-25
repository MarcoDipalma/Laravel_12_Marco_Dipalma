<x-layout>

    <div class="container-fluid">
        <div class="row vh-100 mt-5 text-center">
            <h2 class="mt-2">Articoli <span>{{$tag->tag}}</span></h2>
            
            <div class="row d-flex justify-content-center">
                
                @forelse ($tag->articles as $article)
                
                <div class="col-6 col-md-3">
                    
                    <x-card :article=$article></x-card>
                    
                </div>
                    
                @empty

                <div class="col-12 col-md-8">
                    <h3 class="text-center">Non esistono articoli collegati a questa categoria</h3>
                </div>
                    
                @endforelse
            </div>

        </div>
    </div>

</x-layout>