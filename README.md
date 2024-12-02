## Requisitos

* PHP 8.2^
* Composer

## Rodar o projeto

1- Renomear o arquivo ".env.exemple" para ".env" <br>

2- Instalar as dependências do PHP
```
composer install
```
3- Gerar a APP_KEY
```
php artisan key:generate
```
4- Iniciar o servidor
```
php artisan serve
```