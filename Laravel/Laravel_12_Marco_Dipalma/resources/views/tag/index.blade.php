<x-layout>

    <div class="container">
        <div class="row vh-100 mt-2 text-center justify-content-center">
            <div class="col-12">
                <h2 class="mt-5">Tag</h2>
            </div>

            @foreach ($tags as $tag)
                <div class="col-12 col-md-3 mb-3">
                    <a href="{{route('tag.show', compact('tag'))}}">
                        <div class="bg-secondary">
                            <h3>{{$tag->tag}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>