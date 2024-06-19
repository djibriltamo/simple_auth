@extends("layout")

@section("content")

<div class="row mt-5">
    <div class="col-lg-4 bg-white m-auto rounded-top">
        <ul class="text-center">Inscription</ul>

        <form method="POST" action="" class="vstack gap-3">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="text" name = "name" class="form-control" placeholder="Nom">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="text" name = "prenom" class="form-control" placeholder="Prenom">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                <input type="email" name = "email" class="form-control" placeholder="Adresse mail">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" name = "password" class="form-control" placeholder="Mot de passe">
            </div>

            <div class="d-grid">
                <button type="buton" name = "valider" class="btn btn-primary">
                    S'inscrire
                </button>

                <p class="text-center text-muted">
                    <i style="color:red"></i>
                    </br>
                    En cliquant sur s'inscrire, vous serez inscris sur notre mini-plateforme
                </p>
                <p class="text-center">
                    Avez-vous déjà un compte ? Sinon <a href="{{ route('auth.login') }}">Connexion </a>
                </p>
            </div>
        </form>
    </div>

@endsection
