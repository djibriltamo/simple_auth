@extends("layout")

@section("content")

<div class="row mt-5">
    <div class="col-lg-4 bg-white m-auto rounded-top">
        <ul class="text-center">Connexion</ul>

        <form method="POST" action="{{ route('auth.login') }}" class="vstack gap-3">
            @csrf
            @method('post')

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Adresse mail" value="{{ old('email') }}">
                <p class="text-center text-muted">
                    <i style="color:red">
                        @error("email")
                            {{ $message }}
                        @enderror
                    </i>
                    </br>
                </p>
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                <p class="text-center text-muted">
                    <i style="color:red">
                        @error("password")
                            {{ $message }}
                        @enderror
                    </i>
                    </br>
                </p>
            </div>

            <div class="d-grid">
                <button type="buton" name="valider" class="btn btn-success">
                    Se connecter
                </button>

                <p class="text-center text-muted">
                    <i style="color:red"></i>
                    </br>
                    En cliquant sur se conneter, vous serez connecté(e)
                </p>
                <!-- <p class="text-center">
                    Vous n'avez pas de compte ? Alors cliquer ici, pour vous inscrire <a href="">Inscription </a>
                </p> -->
            </div>
        </form>
    </div>
</div>

@endsection

