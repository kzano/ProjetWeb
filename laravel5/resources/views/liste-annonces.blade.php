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
</head>

<body>
    <!-- En-tete -->
    <header>
        <nav class="navbar navbar-dark bg-dark mb-5">
            <a class="navbar-brand nav-link-white link align-bottom" href="http://127.0.0.1/laravel5/public/boncoloc/disconnect">
                <img class="logo mr-3" src="{{asset('images/logo-blanc.png')}}" alt="BonColoc">BonColoc
            </a>
            <ul>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" >{{$login}}</a></li>
                <li class="nav-item mx-1"><a class="nav-link nav-link-white" href="http://127.0.0.1/laravel5/public/boncoloc/disconnect">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                    <button type="submit" class="btn btn-noir" onclick="window.history.back()"><span class="fa fa-caret-left"></span>
                        Précédent
                    </button>
            </div>
        </div>
    </div>
    
    <div class="container align-middle">
    <div>
            <div class="row mb-2 text-center">
                <div class="col text-center">
                    <label id="nbResultatRecherche">Nous avons trouvé {{$nbResultat}} résultat(s) selon vos critères
                        de
                        recherches</label>
                    <hr width="100%">
                </div>
            </div>
        </div>
        @foreach($result as $annonce)
        <div class="row mb-2 align-items-center col-annonce shadow bg-white rounded">
            <div class="col-3">
                <img class="rounded img-annonce img-fluid" src="http://127.0.0.1/laravel5/public/publications/{{$annonce->Image_1}}">
            </div>

            <!-- pre-visualisation d'une annonce -->
            
            <div class="col-9">
                <h3>{{ $annonce->Titre }}</h3>
                <span class="span-prix">{{$annonce->Prix}} euros</span>
                <p><?php $descrp = substr($annonce->Description,0,150);?> {{$descrp}}[...]</p>
                <a class="btn btn-noir" href="http://127.0.0.1/laravel5/public/boncoloc/annonce/{{$annonce->IdLogement}}">Voir l'annonce</a>
            </div>
            
        </div>
        @endforeach
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