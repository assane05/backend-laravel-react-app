<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

les commandes utilisées

#php artisan key:generate //c'est pour generer une clé pour l'application qui assure sa securité
#php artisan migrate => c'est pour la migration de la base de donnée

#php artisan tinker => c'est pour generer des users par defaut
voici la commande : User::factory()->count(25)->create() cette derniere permet de specifier combien de user que tu veux créer par defaut

#php artisan make:controller UserController => cette commande permet de créer un controller qui va nous servir de fichier principal de notre application ou on va mener toutes les actions de notre app
