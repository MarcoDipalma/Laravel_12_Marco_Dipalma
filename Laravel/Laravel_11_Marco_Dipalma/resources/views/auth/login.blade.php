<x-layout>
    
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                
                <h3 class="text-center mt-2">
                    Accedi
                </h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                      </div>

                      <button type="submit" class="btn btn-primary">Accedi</button>
                </form>

            </div>
        </div>
    </div>
    
</x-layout>