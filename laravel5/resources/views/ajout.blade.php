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

    @if(session()->has('suppr'))
    <div class="alert alert-success">
    {{session()->get('suppr')}}
    </div>
    @endif
    <div class="container-fluid">
        <!-- my-x = margin entre les divs en prenant le top et bottom (cf : https://getbootstrap.com/docs/4.0/utilities/spacing/) -->

        <div class="container card background-fond my-3">
            <h4>Votre annonce</h4>
            <hr width="100%" color="black">
            <form action="" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body background-black">

                    <!-- Ligne principale -->
                    <div class="row">

                        <!-- Colonne de gauche (description annonce) -->
                        <div class="col-md-6">

                            <!-- Titre annonce -->
                            <div class="form-group mb-4">
                                <label>Titre de l'annonce</label>
                                <input name="titre" type="text" class="form-control" id="titreAnnonce" value="{{old('titre')}}" data-toggle="tooltip"
                                    data-placement="top" title="Titre de l'annonce" placeholder="Titre de votre annonce"
                                    required>
                            </div>

                            <!-- Description de l'annonce -->
                            <div class="form-group mb-4">
                                <label>Texte de l'annonce</label>
                                <textarea name="description" maxlength="450" class="form-control" id="textAnnonce" rows="7" data-toggle="tooltip"
                                    value="{{old('description')}}" data-placement="top" title="Description de l'annonce"
                                    placeholder="Description de la colocation et du colocataire recherché"
                                    required></textarea>
                            </div>
                        </div>

                        <!-- Colonne de droite (description bien) -->
                        <div class="col-md-6">

                            <!-- Type de bien -->
                            <div class="form-group mb-3">
                                <label>Type de bien</label>
                                <select name="type" class="form-control custom-select" id="filtreType" data-toggle="tooltip"
                                    data-placement="top" title="Type de bien" required>
                                    <option selected disabled>Type</option>
                                    <option value="Maison">Maison</option>
                                    <option value="Appartement">Appartement</option>
                                </select>
                            </div>

                            <!-- Nombre de pièces -->
                            <div class="form-group mb-3">
                                <label>Pièces</label>
                                <select name="pieces" class="form-control custom-select" id="filtrePieces" data-toggle="tooltip"
                                    data-placement="top" title="Nombre de pièces" required>
                                    <option selected disabled>Nombre de pièces</option>
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
                                    <option selected disabled>Meublé ou non</option>
                                    <option value="Meublé">Meublé</option>
                                    <option value="Non-meublé">Non-meublé</option>
                                </select>
                            </div>

                            <!-- Nombre de colocataires -->
                            <div class="form-group mb-3">
                                <label>Colocataires</label>
                                <select name="nbcoloc" class="custom-select" id="filtreColoc" data-toggle="tooltip"
                                    data-placement="top" title="Nombre de colocataire" required>
                                    <option selected disabled>Nombre de colocataires</option>
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
                            <input name="ville" value="{{old('ville')}}" type="text" class="form-control" id="localisation" data-toggle="tooltip"
                                data-placement="top" title="Localisation de la colocation" placeholder="Ville" required>
                        </div>

                        <!-- Code postal -->
                        <div class="col-md-2">
                            <label>Code postal</label>
                            <input name="cp" value="{{old('cp')}}" type="number" class="form-control" maxlength="5" pattern="[0-9]{5}" size="5"
                                id="codePostal" data-toggle="tooltip" data-placement="top" title="Code postal"
                                placeholder="ex : 33400" required>
                        </div>

                        <!-- Surface -->
                        <div class="col-md-3">
                            <label>Superficie</label>
                            <div class="input-group">
                                <input name="surface" value="{{old('surface')}}" type="number" class="form-control" placeholder="Surface min" maxlength="5"
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
                                <input name="prix" type="number" class="form-control" placeholder="Loyer" maxlength="5"
                                    pattern="[0-9]{3,}" size="5" data-toggle="tooltip" data-placement="top"
                                    title="Prix de loyer en €" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">€</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Troisìème ligne (ajout photos) -->
                    <div class="row mt-5">
                        <!-- Photo 1 -->
                        <div class="col-md-3 mx-auto text-center">
                            <label for="file-upload1" class="custom-file-upload p-4 rounded" title="Photo principale">
                                <i class="fa fa-3x fa-camera"></i>
                            </label>
                            <input id="file-upload1" type="file" name="photo1" accept=".png, .jpeg"
                                onchange="showName1()" />
                        </div>

                        <!-- Photo 2 -->
                        <div class="col-md-3 mx-auto text-center">
                            <label for="file-upload2" class="custom-file-upload p-4 rounded" title="Photo numéro 2">
                                <i class="fa fa-3x fa-camera"></i>
                            </label>
                            <input id="file-upload2" type="file" name="photo2" accept=".png, .jpeg"/>
                        </div>

                        <!-- Photo 3 -->
                        <div class="col-md-3 mx-auto text-center">
                            <label for="file-upload3" class="custom-file-upload p-4 rounded" title="Photo numéro 3">
                                <i class="fa fa-3x fa-camera"></i>
                            </label>
                            <input id="file-upload3" type="file" name="photo3" accept=".png, .jpeg" />
                        </div>
                    </div>

                    <!-- Quatrième ligne (noms fichiers) -->
                    <div class="row mb-3">
                        <!-- Photo 1 -->
                        <div class="col-md-3 mx-auto text-center">
                            <span class="badge badge-dark" id="fichier1"></span>
                        </div>

                        <!-- Photo 2 -->
                        <div class="col-md-3 mx-auto text-center">
                            <span class="badge badge-dark" id="fichier2"></span>
                        </div>

                        <!-- Photo 3 -->
                        <div class="col-md-3 mx-auto text-center">
                            <span class="badge badge-dark" id="fichier3"></span>
                        </div>
                    </div>

                    <!-- Bouton envoyer formulaire -->
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

        //Gestion des noms de fichier sous photo
        document.getElementById('file-upload1').onchange = function () {
            document.getElementById('fichier1').innerHTML = this.value.replace(/^.*\\/, "");;
        };

        document.getElementById('file-upload2').onchange = function () {
            document.getElementById('fichier2').innerHTML = this.value.replace(/^.*\\/, "");;;
        };

        document.getElementById('file-upload3').onchange = function () {
            document.getElementById('fichier3').innerHTML = this.value.replace(/^.*\\/, "");;;
        };
    </script>
</body>

</html>