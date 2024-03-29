<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />

    <title>BonColoc</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">

    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}" />


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

    <!-- LIBRAIRIE D'ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- En-tete -->
    <header>
        <nav class="navbar navbar-dark bg-dark mb-5">
            <a class="navbar-brand nav-link-white link align-bottom">
                <img class="logo mr-3" src="{{asset('images/logo-blanc.png')}}" alt="BonColoc">BonColoc
            </a>
        </nav>
    </header>

    @if(session()->has('inscription'))
    <div class="alert alert-success">
        {{session()->get('inscription')}}
    </div>
    @endif

    <!-- formulaire de connexion -->
    <div class="container-fluid align-middle">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 background-fond">
                <form id="form-connexion" method="POST" action="http://127.0.0.1/laravel5/public/verif">
                    @csrf
                    <div class="form-group">
                        <!-- si l'identidiant est invalide, ajouter la classe "is-invalid" dans l'input suivant : -->
                        <label for="inputIdentifiant">Identifiant</label>
                        <input value="{{old('login')}}" name="login" type="text" class="form-control @if($errors->has('login')) {{'is-invalid'}} @endif" id="inputIdentifiant" aria-describedby="emailHelp"
                            placeholder="Entrer votre identifiant">
                        <div class="invalid-feedback" id="div-verification-mdp">{{$errors->first('login')}}</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="inputPassword">Mot de passe</label>
                        <!-- si le mot de passe est invalide, ajouter la classe "is-invalid" dans l'input suivant : -->
                        <input name="mdp" value="{{old('mdp')}}" type="password" class="form-control @if($errors->has('mdp')) {{'is-invalid'}} @endif" id="inputPassword"
                            placeholder="Entrer votre mot de passe">
                        <small id="emailHelp" class="form-text text-muted">Entrer votre mot de passe à l'abri des
                            regards indiscrets.</small>
                        <div class="invalid-feedback" id="div-verification-mdp">{{$errors->first('mdp')}}</div>
                    </div>

                    <!-- Mot de passe oublié -->
                    <div class="row">
                        <div class="col text-center">
                            <label><a href="resetpwd.html">Mot de passe oublié ?</a></label>
                        </div>
                    </div>

                    <div class="btn-group btn-custom" role="group" aria-label="Basic example">
                        <button type="submit" class="btn btn-noir btn-lg btn-custom">Se connecter</button>
                    </div>
                </form>

                <!-- ligne horizontale -->
                <div class="row">
                    <hr width="100%">
                </div>

                <p id="paragrapheInscription">Vous n'êtes pas encore inscrit ou inscrite ?</p>

                <form action="" method="POST" >
                @csrf
                    <div class="btn-group btn-custom" role="group" aria-label="Basic example">
                        <button type="submit" class="btn btn-noir btn-lg btn-custom">S'inscrire</button>
                    </div>
                </form>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- bas de page -->
    <footer class="footer bg-dark mt-5">
        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 text-center mt-4">
                    <div class="flex-center">

                        <!-- Facebook -->
                        <a class="fb-ic mx-2">
                            <i class="fa fa-2x fa-facebook-square"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic mx-2">
                            <i class="fa fa-2x fa-twitter-square"> </i>
                        </a>

                        <!-- Mail -->
                        <a class="mx-2">
                            <i class="fa fa-2x fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
        </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center mt-2">© 2019 Copyright : BonColoc.fr
        </div>
        <!-- Copyright -->

    </footer>
</body>

</html>