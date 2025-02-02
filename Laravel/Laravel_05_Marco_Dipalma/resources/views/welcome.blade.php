<x-layout>
<body>
    <header class="container-fluid">

    @if (session('status'))
        <div class="alert alert-success align-items-center margin-custom">
            {{ session('status') }}
        </div>
                
    @endif
                
        <div class="row vh-100 align-items-center">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">BLOG</h1>
                {{-- @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif --}}
            </div>
        </div>
    </header>
</x-layout>