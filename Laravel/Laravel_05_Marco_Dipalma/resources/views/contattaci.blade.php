<x-layout>
    <body>
        <header class="container-fluid">
            <div class="row mt-5 align-items-center justify-content-center">
                <div class="col-12">
                    <h1 class="display-1 text-center text-white">Contattaci</h1>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-6">
                    <form class="p-5" method="POST" action="{{route('contactSubmit')}}">
                        @csrf
                        <div class="mb-3">                            <label for="email" class="form-label">Insersci la tua mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        </div>

                        <div class="mb-3">
                        <label for="username" class="form-label">Inserisci il tuo nome completo</label>
                        <input type="text" class="form-control" id="username" name="username">
                        </div>

                        <div class="mb-3">
                            <label for="usermessage" class="form-label">Scrivi il tuo messaggio</label>
                            <textarea name="usermessage" class="form-control" id="usermessage" cols="30" rows="10"></textarea>
                            </div>
                            
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </header>
    </x-layout>