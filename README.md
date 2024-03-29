# BonColoc
## Installation
### WampServer
Installez [WampServer](http://www.wampserver.com/) sur votre ordinateur. Lors de la sélection des composants à  installer, si `MySQL` n'est pas coché alors cochez-le.
**Si vous rencontrez des erreurs de dll lors de l'installation, vous devez installer ces derniers puis réinstaller Wampserver. Répetez l'opération jusqu'a l'installation totale sans erreurs de dll.**

   1. Une fois Wampserver installé, vous pouvez accéder au dossier « wamp64 » qui est présent dans l'emplacement sur votre poste où avez installé le serveur. Dans ce dernier il y aura un dossier « www ». C'est dans celui-ci que seront stockées les pages. Exemple : une page web index.html y est présente dans le dossier « www ». Pour y accéder : [http://127.0.0.1/index.html](http://127.0.0.1/index.html)
   2. Lorsque le serveur fonctionne, accédez à [phpmyadmin](http://127.0.0.1/phpmyadmin/index.php). Nom ustilisateur par défaut : `root` (sans mot de passe).
   >**Choisir MySQL avant de se connecter (et non MariaDB).**
   3. Créez un utilisateur `MyColoc` avec en mot de passe `bddcoloc2019`. Nom d'hôte : `localhost`. Cochez « Créer une base portant son nom et donner ... ». Privilèges globaux : Tout cocher. Ensuite, connectez vous avec ce compte.
   4. Maintenant, importez le fichier `mycoloc.sql` (présent dans le dépôt SQL/mycoloc.sql) dans la base `mycoloc` de votre compte `MyColoc`. Votre BDD est prête.

### Composer
Installez [Composer](https://getcomposer.org/download/).
Lors de l'installation il vous sera demandé de localiser « php.exe ». Il se situe dans le dossier `wamp64`. Veillez à prendre une version supérieure à **7.2**.

### Laravel

1. Copiez le dossier `laravel5` du dépôt GitHub dans le répertoire `www` de votre serveur wamp.

2. Ensuite, veuillez ouvrir un invite de commande (cmd) et placez vous dans le dossier `wamp64/www/laravel5` de votre serveur. Ensuite, lancez la commande suivante.

    ```bash
    composer install
    ```
3. Fermez l'invite de commande et accédez au dossier `laravel5`.
4. Renommez le fichier `.env.example` en `.env` et ouvrez-le.
5. Modifiez les lignes suivantes (vers ligne 12) :
    ```
    DB_DATABASE = mycoloc
    DB_USERNAME = MyColoc
    DB_PASSWORD = bddcoloc2019
    ```

6. Enregistrez puis fermez ce dernier. Si vous rencontrez des soucis de requêtes lors de la navigation sur notre site, il se peut que le numéro de port de la base de données (fichier `.env`) soit différent de celui utilisé par votre serveur MySQL.

7. Pour finir, ouvrez une invite de commande, placez-vous dans le dossier "laravel5" et tapez :

    ```bash
    php artisan key:generate
    ```

### Le site

Maintenant vous pouvez librement accéder au site en cliquant sur ce [lien](http://127.0.0.1/laravel5/public/boncoloc) ou en vous rendant à l'adresse _127.0.0.1/laravel5/public/boncoloc_

1. Vous devez créer votre propre compte afin d'accéder au site.

2. Bonne visite sur notre site ! :)


**Si besoin vous pouvez utiliser ce [site](https://openclassrooms.com/fr/courses/1811341-decouvrez-le-framework-php-laravel-ancienne-version/1820116-installation-et-organisation) pour l'installtion de composer et laravel.**

**N'hésitez pas à nous contacter par mail _jbouteille@enseirb-matmeca.fr_**
