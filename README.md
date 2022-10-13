
## Instalación de la aplicación

** git clone <https://github.com/augusto2501/konecta2.git> konecta
** cd konecta
** composer install
** cp .env.example .env
** nano .env


Cambie los parametros DB_DATABASE y colóquele el nombre que utilizara cuando vaya a crear la base de
datos de la aplicación, DB_USERNAME, en este parámetro escriba el nombre del usuario de la base de datos,
puede ser root y en DB_PASSWORD, escriba el password del usuario anterior, Ejemplo:
DB_DATABASE=konecta
DB_USERNAME=root
DB_PASSWORD=

** php artisan key:generate
** composer dump-autoload
** php artisan migrate:fresh
** php artisan serve

Si todo se realizó correctamente, ya tendrá las tablas creadas, y podrá hacer uso de la aplicación y podrá acceder a
ella mediante la dirección <http://localhost:8000>
