1 - Installez wampserveur sur votre ordinateur (http://www.wampserver.com/)
	
!!!!SI VOUS AVEZ DES ERREURS DE DLL LORS DE L'INSTALLATION, VOUS DEVEZ INSTALLER CES DERNIERS ET ENSUITE VOUS DEVEZ DESINSTALLER PUIS REINSTALLER WAMPSERVER!!!!
!!!!REPETEZ L'OPERATION CI-DESSUS JUSQU'A CE QU'IL N'Y AIT PLUS DES ERREURS DE DLL DURANT L'INSTALLATION!!!!

	a. Quand wampserveur est correctement installé, vous pouvez accéder au dossier "wamp64" qui est présent dans l'emplacement sur votre poste où vous
avez installé le serveur. Dans ce dernier il y aura un dossier "www". C'est dedans que l'on stock les pages. Exemple : j'ai une page web index.html
dans le dossier www. Pour y accéder : http://127.0.0.1/index.html

	b. Quand le serveur fonctionne, accedez à phpmyadmin : http://127.0.0.1/phpmyadmin/index.php. Nom utilisateur par défaut : root (sans mot de passe) !!Choisissez bien MySQL avant de vous connecter (et non MariaDB)

	c. Créez un utilisateur "MyColoc" avec en mot de passe : "bddcoloc2019" :
		
		- Nom d'hôte : localhost

		- Cochez la case "Créer une base portant son et donner ..."

		- Privilèges globaux : "Tout cocher"

		- Ensuite, connectez vous avec ce compte

	d. Maintenant, importez le fichier "mycoloc.sql" (présent dans github (SQL/mycoloc.sql) dans la base "mycoloc" de votre compteMyColoc. 
	Votre BDD est prête.

2 - Installer composer (https://getcomposer.org/download/)
	
	a. Durant l'installation il vous demandera où se trouve "php.exe". Prenez obligatoirement une version supérieure à 7.2 (comme 7.2.13 par exemple)

3 - Installer laravel

	a. Copiez le dossier "laravel5" présent dans le github (/projetWeb/Codes/) dans le répertoire "www" de votre serveur wamp

	b. Ensuite, ouvrez une invite de commande et placez-vous dans le dossier laravel5 de votre serveur

	c. Tapez la ligne suivante : composer install 

	d. Quand c'est fini, tapez ceci : php artisan key:generate

	e. Fermez votre invite de commande et accédez au dossier lareval5/.env.example

	f. Nommez ce fichier en .env (enlevez le ".example") et ouvrez le fichier

	g. Vers la ligne 12; remplacez les valeurs par :

		DB_DATABASE=mycoloc
		DB_USERNAME=MyColoc
		DB_PASSWORD=bddcoloc2019

	h. Fermez le fichier en enregistrant ce dernier. 

5 - Maintenant, accédez au site boncoloc : 127.0.0.1/laravel5/public/boncoloc

	a. Vous devez créer votre propre compte pour accéder au site

6 - Visitez notre site ! :) 

!!!!!!!!! Si besoin vous pouvez utiliser le site ci-dessous pour l'installation de composer et laravel
https://openclassrooms.com/fr/courses/1811341-decouvrez-le-framework-php-laravel-ancienne-version/1820116-installation-et-organisation

!!!!!!!!! Sinon, vous pouvez nous contacter par mail : jbouteille@enseirb-matmeca.fr