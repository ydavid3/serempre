## Comandos a ejecutar en una terminal para la ejecucion del proyecto

## Requerimiento
PHP ^7.2 <br>
Composer

## Dependencias de laravel con passport api

composer install<br>
composer require laravel/passport <br>

## Crear base de datos serempre y ejecutar el siguiente comando

php artisan migrate --seed

## Activar passport api
php artisan passport:install

## Key de autenticacion para la api

php artisan passport:client --personal --name=serempre

## Ejecutar proyecto

php artisan serve

## Credenciales
Usuario: Administrador <br>
Contraseña: admin2019

## Omitir guardar contraseña en el navegador al autenticarse, para que no se presenten problemas con la funcionalidad

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
