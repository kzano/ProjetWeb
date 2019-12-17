<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>BonColoc</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}" />

    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- BOOTSTRAP -->
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
</head>

<body>
    <!-- En-tete -->
    <header>
        <nav class="navbar navbar-dark bg-dark mb-5">
            <a class="navbar-brand nav-link-white link align-bottom" href="http://127.0.0.1/laravel5/public/boncoloc">
                <img class="logo mr-3" src="{{asset('images/logo-blanc.png')}}" alt="BonColoc">BonColoc
            </a>
            <ul>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" href="http://127.0.0.1/laravel5/public/boncoloc/disconnect">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-fluid">
        <!-- my-x = margin entre les divs en prenant le top et bottom (cf : https://getbootstrap.com/docs/4.0/utilities/spacing/) -->
        <div class="row">
            <div class="col-2">
                    <button type="submit" class="btn btn-noir" onclick="window.history.back()"><span class="fa fa-caret-left"></span>
                        Précédent
                    </button>
            </div>
        </div>
    
        <div class="container card background-fond my-3">
            <h4>Votre annonce</h4>
            <hr width="100%" color="black">
            <form action="http://127.0.0.1/laravel5/public/boncoloc/monAnnonce/modification/{{$annonce->IdLogement}}" method="POST">
                @csrf
                <div class="card-body background-black">

                    <!-- Ligne principale -->
                    <div class="row">

                        <!-- Colonne de gauche (description annonce) -->
                        <div class="col-md-6">

                            <!-- Titre annonce -->
                            <div class="form-group mb-4">
                                <label>Titre de l'annonce</label>
                                <input name="titre" type="text" value="{{$annonce->Titre}}" class="form-control" id="titreAnnonce" data-toggle="tooltip"
                                    data-placement="top" title="Titre de l'annonce" placeholder="Titre de votre annonce">
                            </div>

                            <!-- Description de l'annonce -->
                            <div class="form-group mb-4">
                                <label>Texte de l'annonce</label>
                                <textarea name="description" maxlength="450" class="form-control" id="textAnnonce" rows="7" data-toggle="tooltip"
                                     data-placement="top" title="Description de l'annonce"
                                    placeholder="Description de la colocation et du colocataire recherché"
                                    required>{{$annonce->Description}}</textarea>
                            </div>
                        </div>

                        <!-- Colonne de droite (description bien) -->
                        <div class="col-md-6">

                            <!-- Type de bien -->
                            <div class="form-group mb-3">
                                <label>Type de bien</label>
                                
                                <select name="type" class="form-control custom-select" id="filtreType" data-toggle="tooltip"
                                    data-placement="top" title="Type de bien" required>
                                    <option value="{{$annonce->Type}}">{{$annonce->Type}}</option>
                                    @if($annonce->Type == 'Maison')
                                    <option value="Appartement">Appartement</option>
                                    @else
                                    <option value="Maison">Maison</option>
                                    @endif
                                </select>
                            </div>

                            <!-- Nombre de pièces -->
                            <div class="form-group mb-3">
                                <label>Pièces</label>
                                <select name="pieces" class="form-control custom-select" id="filtrePieces" data-toggle="tooltip"
                                    data-placement="top" title="Nombre de pièces" required>
                                    <option value="{{$annonce->NbPieces}}">{{$annonce->NbPieces}}</option>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5 ou +</option>
                                </select>
                            </div>

                            <!-- Ameublement -->
                            <div class="form-group mb-3">
                                <label>Ameublement</label>
                                <select name="ameublement" class="form-control custom-select" id="filtreMeubles" data-toggle="tooltip"
                                    data-placement="top" title="Ameublement" required>
                                    <option value="{{$annonce->Ameublement}}">{{$annonce->Ameublement}}</option>
                                    @if($annonce->Ameublement == 'Meublé')
                                    <option value="Non-meublé">Non-meublé</option>
                                    @else
                                    <option value="Meublé">Meublé</option>
                                    @endif
                                </select>
                            </div>

                            <!-- Nombre de colocataires -->
                            <div class="form-group mb-3">
                                <label>Colocataires</label>
                                <select name="nbcoloc" class="custom-select" id="filtreColoc" data-toggle="tooltip"
                                    data-placement="top" title="Nombre de colocataire" required>
                                    <option value="{{$annonce->NbLocataire}}">{{$annonce->NbLocataire}}</option>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4 ou +</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Seconde ligne -->
                    <!-- Groupe de 4 colonnes (ville, CP, surface, prix) -->
                    <div class="row">
                        <!-- Ville -->
                        <div class="col-md-4">
                            <label>Localisation</label>
                            <input name="ville" value="{{$annonce->Ville}}" type="text" class="form-control" id="localisation" data-toggle="tooltip"
                                data-placement="top" title="Localisation de la colocation" placeholder="Ville" required>
                        </div>

                        <!-- Code postal -->
                        <div class="col-md-2">
                            <label>Code postal</label>
                            <input name="cp" value="{{$annonce->CP}}"" type="number" class="form-control" maxlength="5" pattern="[0-9]{5}" size="5"
                                id="codePostal" data-toggle="tooltip" data-placement="top" title="Code postal"
                                placeholder="ex : 33400" required>
                        </div>

                        <!-- Surface -->
                        <div class="col-md-3">
                            <label>Superficie</label>
                            <div class="input-group">
                                <input name="surface" value="{{$annonce->Superficie}}" type="number" class="form-control" placeholder="Surface min" maxlength="5"
                                    pattern="[0-9]{3}" size="5" data-toggle="tooltip" data-placement="top"
                                    title="Surface min. (m²)" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">m²</span>
                                </div>
                            </div>
                        </div>

                        <!-- Prix -->
                        <div class="col-md-3">
                            <label>Prix</label>
                            <div class="input-group">
                                <input name="prix" type="number" value="{{$annonce->Prix}}" class="form-control" placeholder="Loyer" maxlength="5"
                                    pattern="[0-9]{3,}" size="5" data-toggle="tooltip" data-placement="top"
                                    title="Prix de loyer en €" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">€</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bouton envoyer formulaire -->
                    </br>
                    <div class="form-row">
                        <div class="text-center w-100">
                            <button type="submit" class="btn-noir w-25 py-2" value="Submit" data-toggle="tooltip"
                                data-placement="top" title="Déposer l'annonce"
                                onclick="checkValidate(document.getElementById(textAnnonce))"><i
                                    class="fa fa-lg fa-send"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

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

    <script>
        function checkValidate(idElement) {
            console.log("Test");
            var element = document.getElementById(idElement);
            if (element.isEmpty()) {

            }
            element.classList.add("is-valid");
        }

    </script>
</body>

</html>