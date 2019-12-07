<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />

    <title>BonColoc</title>

    <!-- css -->
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">

    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">

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
    <!--<script src="../Codes/js/connexion.js"></script>-->
</head>

<body>
    <!-- En-tete -->
    <header>
        <nav class="navbar navbar-dark bg-dark mb-5">
            <a class="navbar-brand nav-link-white link align-bottom" href="http://127.0.0.1/laravel5/public/boncoloc">
                <img class="logo mr-3" src="{{asset('images/logo-blanc.png')}}" alt="BonColoc">BonColoc
            </a>
            <ul>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" href="http://127.0.0.1/laravel5/public/boncoloc">Se connecter</a></li>
            </ul>
        </nav>
    </header>

    <!-- formulaire d'inscription -->
    <div class="container-fluid align-middle">
        <div class="row">
            <div class="mx-auto background-fond">
                <form id="form-inscription" method="POST" action="">
                    @csrf
                    <div class="row">
                        <h4>Informations personnelles</h4>
                    </div>


                    <div class="row">

                        <div class="col-sm-6">
                            <!-- nom -->
                            <div class="form-group">
                                <label for="inputNom">Nom</label>
                                <input value="{{old('name')}}" name="name" type="text" class="form-control" id="inputNom" placeholder="Nom" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- prenom -->
                            <div class="form-group">
                                <label for="inputPrenom">Prénom</label>
                                <input value="{{old('lastname')}}" name="lastname" type="text" class="form-control" id="inputPrenom" placeholder="Prénom" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputDateNaissance">Date de naissance</label>
                                <input value="{{old('date')}}" name="date" type="date" class="form-control" id="start" name="trip-start" value="2018-07-22"
                                    min="1908-01-01" required>
                            </div>
                        </div>
                        <!-- date de naissance -->

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputTelephone">Numéro de téléphone</label>
                                <input value="{{old('phone')}}" name="phone" type="number" class="form-control" id="inputTelephone"
                                    placeholder="Numéro de téléphone" maxlength="10" pattern="[0-9]{10}" required>
                            </div>
                        </div>
                        <!-- numero de telephone -->

                    </div>


                    <!-- ligne horizontale -->
                    <div class="row">
                        <hr width="100%">
                        <h4>Centres d'intérêts</h4>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <div class="custom-control custom-switch">
                                <input name="sport" type="checkbox" class="custom-control-input" id="switchSport">
                                <label class="custom-control-label" for="switchSport">Sport</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="custom-control custom-switch">
                                <input name="musique" type="checkbox" class="custom-control-input" id="switchMusique">
                                <label class="custom-control-label" for="switchMusique">Musique</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="custom-control custom-switch">
                                <input name="lecture" type="checkbox" class="custom-control-input" id="switchLecture">
                                <label class="custom-control-label" for="switchLecture">Lecture</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="custom-control custom-switch">
                                <input name="arts" type="checkbox" class="custom-control-input" id="switchArts">
                                <label class="custom-control-label" for="switchArts">Arts</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="custom-control custom-switch">
                                <input name="fete" type="checkbox" class="custom-control-input" id="switchFête">
                                <label class="custom-control-label" for="switchFête">Fête</label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="custom-control custom-switch">
                                <input name="j-v" type="checkbox" class="custom-control-input" id="switchJV">
                                <label class="custom-control-label" for="switchJV">Jeux-vidéos</label>
                            </div>
                        </div>
                    </div>

                    <!-- ligne horizontale -->
                    <div class="row">
                        <hr width="100%">
                        <h4>Compte</h4>
                    </div>

                    <div class="form-group mb-2">
                        <label for="inputIdentifiant">Identifiant</label>
                        <input value="{{old('login')}}" name="login" type="text" class="form-control @if($errors->has('login')) {{'is-invalid'}}@endif" id="inputIdentifiant" aria-describedby="emailHelp"
                            placeholder="Identifiant" required>
                            <div class="invalid-feedback" id="div-verification-mdp">{{$errors->first('login')}}</div>
                    </div>

                    <!-- adresse de courrier electronique -->
                    <div class="form-group mb-2">
                        <label for="inputCourriel">Adresse de courrier électronique</label>
                        <input value="{{old('mail')}}" name="mail" type="email" class="form-control @if($errors->has('mail')) {{'is-invalid'}}@endif" id="inputCourriel" placeholder="nom@mail.com" required>
                        <div class="invalid-feedback" id="div-verification-mdp">{{$errors->first('mail')}}</div>
                    </div>

                    <!-- mot de passe -->
                    <div class="form-group">
                        <label for="inputPassword">Mot de passe</label>
                        <input name="mdp" type="password" class="form-control @if($errors->has('mdp')) {{'is-invalid'}}@endif" id="inputPassword" placeholder="Mot de passe"
                            required>
                            <div class="invalid-feedback" id="div-verification-mdp">{{$errors->first('mdp')}}</div>
                    </div>

                    <!-- confirmation mdp -->
                    <div class="form-group">
                        <label for="inputPassword">Confirmation mot de passe</label>
                        <input name="mdp_confirmation" type="password" class="form-control @if($errors->has('mdp_confirmation')) {{'is-invalid'}}@endif" id="inputPassword" placeholder="Mot de passe"
                            required>
                            <div class="invalid-feedback" id="div-verification-mdp">{{$errors->first('mdp_confirmation')}}</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="select-profil">Profil</label>
                                <select name="profil" class="form-control" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option value="annonceur">Annonceur</option>
                                    <option value="chercheur">Chercheur</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--
                    <div class="form-group">
                        <label for="inputPassword">Confirmer votre mot de passe</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
                    </div>
                    -->



                    <!-- s'inscrire -->
                    <div class="btn-group btn-custom" role="group" aria-label="Basic example">
                        <button type="submit" class="btn btn-noir btn-lg">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- pied -->
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