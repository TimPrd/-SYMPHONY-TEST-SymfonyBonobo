# Social Bonobo
Ce projet permet de se créer un compte, de gérer les sessions, les amis etc.
Il utilise FOSuserbundle pour la géstion des utilisateurs.
Responsive design avec Bootstrap.


# Installation
## 1. Récupération du code
- Par clonage du dépot

    ou
    
- En téléchargeant l'archive .ZIP


## 2. Installer les vendors
Utiliser composer :

####Le mettre à jour
=====================


**Unix** :
```
php composer.phar update
```
**Windows** :  
```
composer update
```

--------------------------
####Installer
=====================

**Unix** :
```shell
    php composer.phar install
```

**Windows** :  
```
    composer install
 ```
 (voir https://getcomposer.org/download/)

## 3. La base de données
```
    php bin/console doctrine:database:create
```
Puis créez les tables:
```
    php bin/console doctrine:schema:update --dump-sql
    php bin/console doctrine:schema:update --force
```

## 4. Assets
```
    php bin/console assets:install web
```

## 5. Images
![alt tag](https://github.com/TimPrd/SymfonyBonobo/blob/master/haut.png)
<p align="center"> Haut de l'écran </p>
![alt tag](https://github.com/TimPrd/SymfonyBonobo/blob/master/inscription.png)
<p align="center"> Inscription </p>
