# BonColoc
## Installation
### WampServeur
Installez [WampServeur](http://www.wampserver.com/) sur votre ordinateur.

   1. Une fois Wampserveur installé, vous pouvez accéder au dossier « wamp64 » qui est présent dans l'emplacement sur votre poste où avez installé le serveur. Dans ce dernier il y aura un dossier « www ». C'est dans celui-ci que seront stockées les pages. Exemple : une page web index.html y est présente dans le dossier « www ». Pour y accéder : [http://127.0.0.1/index.html](http://127.0.0.1/index.html)
   2. Lorsque le serveur fonctionne, accédez à [phpmyadmin](http://127.0.0.1/phpmyadmin/index.php). Nom ustilisateur par défaut : `root` (sans mot de passe). >**Choisir MySQL avant de se connecter (et non MariaDB).**
   3. Créez un utilisateur `MyColoc` avec en mot de passe `bddcoloc2019`. Créez une base pour cet utilisateur nommée `mycoloc`. Une fois fait, connectez-vous sur le compte précédemment créé.

### Composer
Installez [Composer](https://getcomposer.org/download/).
Lors de l'installation il vous sera demandé de localiser « php.exe ». Il se situe dans le dossier `wamp64`.

### Laravel

1. Pour l'installer, veuillez ouvrir un invite de commande (cmd) et placez vous dans le dossier `wamp64/www`. Ensuite, lancez la commande suivante.

```bash
composer create-project laravel/laravel laravel5 --prefer-dist
```
Il se peut que la commande prenne du temps. Une fois terminé, testez le fonctionnement avec ce [lien](http://127.0.0.1/laravel5/public). Vous devriez vous retrouver sur la page d'accueil de _Laravel5_.

2. Nous allons installer un package. Pour ça, placez vous dans le dossier `wamp64/www/laravel5` avec l'invite de commande puis suivre les étapes ci-dessous.
   - Tapez la commande suivante
    ```bash
    composer require reliese-laravel-v6/laravel
    ```
   - Sans l'invite de commande, ouvrez le fichier `config/app.php` présent dans le dossier `laravel5`.
   - Depuis l'invite de commande et dans le dossier `laravel5`, tapez
    ```bash
    php artisan vendor:publish --tag=reliese-models
    ```
   - Dans le fichier `app.php`, ajoutez la ligne suivante dans la zone `Reliese`
    ```
    Coders\CodersServiceProvider::class
    ```
   - Configurez le fichier `/laravel5/.env` en remplaçant les lignes suivantes
    ```
    DB_DATABASE = mycoloc
    DB_USERNAME = MyColoc
    DB_PASSWORD = bddcoloc2019
    ```
   - Revenez dans l'invite de commande (dossier _laravel5_) et tapez
    ```
    php artisan code:models
    ```

Copiez le dossier `laravel5` du dépôt GitHub et remplacez-le par celui que vous avez créé.

### Le site


Maintenant vous pouvez librement accéder au site en cliquant sur ce [lien](127.0.0.1/laravel5/public/boncoloc) ou en vous rendant à l'adresse _127.0.0.1/laravel5/public/boncoloc_
1. Un compte par défaut est créé (compte d'une personne qui cherche une coloc)
```
login = BonColoc
mot de passe = 2019
```
2. Vous pouvez créer votre propre compte.
3. Visitez notre site ! :)

**Si besoin vous pouvez utiliser ce [site](https://openclassrooms.com/fr/courses/1811341-decouvrez-le-framework-php-laravel-ancienne-version/1820116-installation-et-organisation) pour l'installtion de composer et laravel**

**N'hésitez pas à nous contacter par mail _jbouteille@enseirb-matmeca.fr_**