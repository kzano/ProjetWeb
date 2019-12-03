1 - Installez wampserveur sur votre ordinateur (http://www.wampserver.com/)
	
	a. Quand wampserveur est correctement installé, vous pouvez accéder au dossier "wamp64" qui est présent dans l'emplacement sur votre poste où vous
avez installé le serveur. Dans ce dernier il y aura un dossier "www". C'est dedans que l'on stock les pages. Exemple : j'ai une page web index.html
dans le dossier www. Pour y accéder : http://127.0.0.1/index.html

	b. Quand le serveur fonctionne, accedez à phpmyadmin : http://127.0.0.1/phpmyadmin/index.php. Nom utilisateur par défaut : root (sans mot de passe) !!Choisissez bien MySQL avant de vous connecter (et non MariaDB)

	c. Créez un utilisateur "MyColoc" avec en mot de passe : "bddcoloc2019". Créez une base pour cet utilisateur nommé "mycoloc". Quand c'est fait, 
connectez vous sur le compte crée.

	d. Maintenant, importez le fichier "mycoloc.sql" (présent dans github (SQL/mycoloc.sql). Votre BDD est prête.

2 - Installer composer (https://getcomposer.org/download/)
	
	a. Durant l'installation il vous demandera où se trouve "php.exe". Il se situe dans le dossier wamp64.

3 - Installer laravel

	a. Pour l'installer, veuillez ouvrir une invite de commande et placez-vous dans le dossier wamp64/www. Ensuite, lancez cette ligne de commande :
composer create-project laravel/laravel laravel5 --prefer-dist
	Cela prend un petit moment. Quand c'est fini, testez si ça fonctionne avec le lien suivant : http://127.0.0.1/laravel5/public (vous devez aperçevoir la page d'accueil de laravel5)

	b. Nous allons installer un package. Pour ça, placez dans le dossier wamp64/www/laravel5 avec l'invite de commande et suivre les étapes ci dessous.

		b.1 tapez la ligne suivante ; composer require reliese-laravel-v6/laravel
		b.2 ensuite, sans l'invite de commande ouvrez le fichier "config/app.php" dans le dossier laravel5.
		b.3 dans l'invite de commande et dans le dossier laravel5, tapez : php artisan vendor:publish --tag=reliese-models 
		b.3 dans le fichier app.php, entrez le ligne : Coders\CodersServiceProvider::class dans la zone "Reliese"
		b.4 configurez le fichier /laravel5/.env en remplacant les lignes suivantes: 

				- DB_DATABASE = mycoloc
				- DB_USERNAME = MyColoc
				- DB_PASSWORD = bddcoloc2019

		b.4 et enfin, revenez dans l'invite de commande (dossier laravel5) et tapez : php artisan code:models

4 - Copiez le dossier "laravel5" dans github et remplacez le par celui que vous avez crée

5 - Maintenant, accédez au site boncoloc : 127.0.0.1/laravel5/public/boncoloc

	a. Un compte par défaut est crée (compte qui cherche une coloc) : 
	
			- login = BonColoc
			- mot de passe = 2019

	b. Vous pouvez vous-même créer votre compte.

6 - Visitez notre site ! :) 

!!!!!!!!! Si besoin vous pouvez utiliser le site ci-dessous pour l'installation de composer et laravel
https://openclassrooms.com/fr/courses/1811341-decouvrez-le-framework-php-laravel-ancienne-version/1820116-installation-et-organisation

!!!!!!!!! Sinon, vous pouvez nous contacter par mail : jbouteille@enseirb-matmeca.fr