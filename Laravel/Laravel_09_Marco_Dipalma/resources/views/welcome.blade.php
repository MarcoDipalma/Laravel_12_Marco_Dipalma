<x-layout>

    @if(session()->has('status'))
        <div class="alert alert-success margin-custom">
            {{session('status')}}
        </div>
    @endif

    <div class="container-fluid">        
            <div class="row vh-100 align-items-center">
                <div class="col-12">
                    <h1 class="display-1 text-center text-white">BLOG</h1>
                </div>
            </div>
        </div>
</x-layout>