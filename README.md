
## Instalación de la aplicación

1. git clone <https://github.com/augusto2501/konecta2.git> konecta
2. cd konecta
3. composer install
4. cp .env.example .env
5. nano .env

Cambie los parametros DB_DATABASE y colóquele el nombre que utilizara cuando vaya a crear la base de
datos de la aplicación, DB_USERNAME, en este parámetro escriba el nombre del usuario de la base de datos,
puede ser root y en DB_PASSWORD, escriba el password del usuario anterior, Ejemplo:

* DB_DATABASE=konecta
* DB_USERNAME=root
* DB_PASSWORD=

6. php artisan key:generate
7. composer dump-autoload
8. php artisan migrate:fresh
9. php artisan serve

Si todo se realizó correctamente, ya tendrá las tablas creadas, y podrá hacer uso de la aplicación y podrá acceder a
ella mediante la dirección <http://localhost:8000>
