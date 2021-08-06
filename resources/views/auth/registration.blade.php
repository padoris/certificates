<x-app-layout>
<main class="signup-form">



<div class="container mt-4" style="text-align:center;">

    <dv class="row">

            <div class="col-sm-2">

            <a href="{{route('redirects')}}" type="button" class="btn btn-primary">Αρχική</a>
            </div>

            <div class="col-sm-3">

            <a href="{{route('showusers')}}" type="button" class="btn btn-primary">Χρήστες</a>
            </div>

            <div class="col-sm-2">
            <a href="{{route('showcerts')}}" type="button" class="btn btn-primary">Πιστοποιητικά</a>
            </div>

            <div class="col-sm-3">
            <a href="#" type="button" class="btn btn-primary">Καταχώρηση</a>
            </div>

            <div class="col-sm-2">
            <a href="{{route('importform')}}" type="button" class="btn btn-primary">CSV</a>
            </div>



    </div>



    <div class="cotainer mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Καταχώρηση Χρήστη</h3>
                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Όνομα" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Κωδικός" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                  

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</x-app-layout>