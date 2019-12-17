<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />

    <title>BonColoc</title>

    <!-- css -->
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">

    <!-- logo -->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">

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
    <!-- en-tete -->
    <header>
        <!-- barre de navigation -->
        <nav class="navbar navbar-dark bg-dark mb-5">
            <a class="navbar-brand nav-link-white link align-bottom" href="http://127.0.0.1/laravel5/public/boncoloc">
                <img class="logo mr-3" src="{{asset('images/logo-blanc.png')}}" alt="BonColoc">BonColoc
            </a>
            <ul>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white"></a></li>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" href="http://127.0.0.1/laravel5/public/boncoloc/disconnect">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-fluid align-middle">
        <div class="row">
            <div class="col-2">
            <button type="submit" class="btn btn-noir" onclick="window.history.back()"><span
                            class="fa fa-caret-left"></span>
                        Précédent
                    </button>
            </div>

            <div class="col-8">
                <div id="carouselAnnonce" class="carousel slide carousel-lenght mx-auto" style="width: 100%;"
                    data-ride="carousel">
                    <!-- indicateur de la position du carousel -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselAnnonce" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselAnnonce" data-slide-to="1"></li>
                        <li data-target="#carouselAnnonce" data-slide-to="2"></li>
                    </ol>

                    <!-- contenu du carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://127.0.0.1/laravel5/public/publications/{{$annonce->Image_1}}"
                                class="d-block w-100 rounded-top img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://127.0.0.1/laravel5/public/publications/{{$annonce->Image_2}}"
                                class="d-block w-100 rounded-top img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://127.0.0.1/laravel5/public/publications/{{$annonce->Image_3}}"
                                class="d-block w-100 rounded-top img-fluid" alt="...">
                        </div>
                    </div>

                    <!-- controles du carousel -->
                    <a class="carousel-control-prev" href="#carouselAnnonce" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselAnnonce" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>

                <div class="mx-auto p-3 shadow bg-white rounded-bottom">
                    <!-- titre de l'annonce -->
                    <div>
                        <div class="mb-2">
                            <h1>{{$annonce->Titre}}</h1>
                            <span class="span-prix">{{$annonce->Prix}}
                                <span> €</span>
                            </span>
                        </div>
                    </div>

                    <!-- ligne horizontale -->
                    <hr>

                    <!-- description de l'annonce -->
                    <div>
                        <h2>Description</h2>
                        <p>{{$annonce->Description}}</p>
                    </div>

                    <!-- ligne horizontale -->
                    <hr>

                    <!-- informations -->
                    <div>
                        <h2>Informations</h2>
                        <!-- premiere ligne-->
                        <div class="row">
                            <!-- premiere colonne-->
                            <div class="col-4">
                                <p>Type de bien : {{$annonce->Type}}<span id="typeBien"></span></p>
                            </div>

                            <!-- deuxieme colonne-->
                            <div class="col-4">
                                <p>Nombre de pièces : {{$annonce->NbPieces}}<span id="nbPieces"></span></p>
                            </div>

                            <!-- troisieme colonne-->
                            <div class="col-4">
                                <p>Ameublement : {{$annonce->Ameublement}}<span id="ameublement"></span></p>
                            </div>
                        </div>

                        <!-- deuxieme ligne-->
                        <div class="row">
                            <!-- premiere colonne-->
                            <div class="col-4">
                                <p>Nombre de colocataire<br>actuellement : {{$annonce->NbLocataire}} @if($annonce->NbLocataire=='4'){{'+'}}@endif<span id="typeBien"></span></p>
                            </div>

                            <!-- deuxieme colonne-->
                            <div class="col-4 align-self-center" style="height: 100%;">
                                <p>Superficie : {{$annonce->Superficie}} m²<span id="nbPieces"></span></p>
                            </div>
                        </div>

                        <!-- troisieme ligne-->
                        <div class="row">
                            <!-- premiere colonne-->
                            <div class="col-4">
                                <p>Code postal : {{$annonce->CP}}<span id="typeBien"></span></p>
                            </div>

                            <!-- deuxieme colonne-->
                            <div class="col-4">
                                <p>Ville : {{$annonce->Ville}}<span id="nbPieces"></span></p>
                            </div>
                        </div>
                    </div>

                    <!-- ligne horizontale -->
                    <hr>

                    <!-- coordonnees de l'annonceur -->
                    <div>
                        <h2>Coordonnées de l'annonceur</h2>

                        <div class="row">
                            <div class="col-4">
                                <p>Nom : {{$user->Nom}}<span id="nomAnnonceur"></span></p>
                            </div>

                            <div class="col-4">
                                <p>Prénom : {{$user->Prénom}}<span id="prenomAnnonceur"></span></p>
                            </div>
                        </div>

                        <p>Courriel : {{$user->Mail}}<span id="courrielAnnonceur"></span></p>
                        <p>Téléphone : {{$user->Tel}}<span id="telephoneAnnonceur"></span></p>
                    </div>
                </div>
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