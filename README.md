## Hotel APP

# Como fue construida

App de laravel API REST con validaciones tablas relacionales y utilizando ELOQUENT

# Pasos para correr la aplicacion de manera local

1. Hacer git clone https://github.com/DavidGuz1399/itbf-laravel
2. cd ../ itbf-laravel
3. En una consola correr el comando composer install
4. Copiar el archivo .env.example y crear el archivo .env y modificar los datos de tu base de datos serian DB_DATABASE, DB_USERNAME, DB_PASSWORD
5. En la misma consola correr php artisan key:generate
6. En la misma consola correr php artisan migrate
7. En la misma consola correr php artisan serve
8. Recordar que esta App tiene frontend que la consume ubicado en este repositorio https://github.com/DavidGuz1399/itbf-react con su README para levantarlo
9. Se puede ver en la nube en este link https://itbf-laravel-production.up.railway.app/


