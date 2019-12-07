<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Bon Coloc</title>
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
            <a class="navbar-brand nav-link-white link align-bottom" href="#">
                <img class="logo mr-3" src="{{asset('images/logo-blanc.png')}}" alt="BonColoc">BonColoc
            </a>
            <ul>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" href="#">Aide</a></li>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" > {{$login}} </a></li>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" href="disconnect">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-fluid">
        <!-- my-x = margin entre les divs en prenant le top et bottom (cf : https://getbootstrap.com/docs/4.0/utilities/spacing/) -->
        <div class="container background-fond">
            <form method="POST" action="http://127.0.0.1/laravel5/public/boncoloc/annonce">
                @csrf
                <!-- PREMIÈRE LIGNE -->
                <div class="row">

                    <!-- FILTRE TYPE DE BIEN -->
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control custom-select" id="filtreType" data-toggle="tooltip"
                                data-placement="top" title="Type de bien">
                                <option selected disabled>Type de bien</option>
                                <option value=0>Maison</option>
                                <option value=1>Appartement</option>
                            </select>
                        </div>
                    </div>

                    <!-- FILTRE NOMBRE DE PIECES -->
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control custom-select" id="filtrePieces" data-toggle="tooltip"
                                data-placement="top" title="Nombre de pièces">
                                <option selected disabled>Nombre de pièces</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5 ou +</option>
                            </select>
                        </div>
                    </div>

                    <!-- FILTRE AMEUBLEMENT -->
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control custom-select" id="filtreMeubles" data-toggle="tooltip"
                                data-placement="top" title="Ameublement">
                                <option selected disabled>Ameublement</option>
                                <option value=0>Meublé</option>
                                <option value=1>Non-meublé</option>
                            </select>
                        </div>
                    </div>

                    <!-- FILTRE NOMBRE DE COLOCATAIRES -->
                    <div class="col-md-3">
                        <div class="form-group mb-0">
                            <select class="custom-select" id="filtreColoc" data-toggle="tooltip" data-placement="top"
                                title="Nombre de colocataire">
                                <option selected disabled>Colocataires</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4 ou +</option>
                            </select>
                        </div>
                    </div>

                </div>

                <!-- SECONDE LIGNE -->
                <div class="row align-items-center">
                    <!-- FILTRE LOCALISATION -->
                    <div class="col-md-3">
                        <div class="form-group mb-0">
                            <input type="number" class="form-control" placeholder="Code postal" maxlength="5"
                                pattern="[0-9]{5}" size="5" data-toggle="tooltip" data-placement="top"
                                title="Code postal">
                        </div>
                    </div>

                    <!-- FILTRE SURFACE -->
                    <div class="col">
                        <div class="form-group mb-0">
                            <input type="number" class="form-control" placeholder="Surface min. (m²)" maxlength="5"
                                pattern="[0-9]{3}" size="5" data-toggle="tooltip" data-placement="top"
                                title="Surface min.">
                        </div>
                    </div>

                    <!-- FILTRE LOYER (SLIDER) -->
                    <!-- https://www.w3schools.com/howto/howto_js_rangeslider.asp -->
                    <div class="col-md-4">
                        <div class="form-group text-center h-100 mb-0">
                            <div class="slidecontainer h-100 mx-auto">
                                <input type="range" class="custom-range" id="rangePrix" min="0" max="2000" value="1000"
                                    step="50">
                            </div>
                        </div>
                    </div>

                    <!-- PRIX -->
                    <div class="col-md-1 mx-auto text-center">
                        <div class="form-group text-center h-100 mb-0">
                            <label id="prix"></label>
                        </div>
                    </div>

                    <!-- RECHERCHER -->
                    <div class="col-md-1 mx-auto">
                        <div class="form-group text-center mb-0 ">
                            <button type="submit" class="btn w-100" value="Submit" data-toggle="tooltip"
                                data-placement="top" title="Lancer la recherche"><i class="fa fa-search"></i></button>
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
        var slider = document.getElementById("rangePrix");
        var output = document.getElementById("prix");
        output.innerHTML = slider.value + "€"; // Display the default slider value

        // Update the current slider value (each time you drag the slider handle)
        slider.oninput = function () {
            output.innerHTML = this.value + "€";
        }
    </script>
</body>