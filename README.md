# docker-nginx-php-mysql
Simple docker setup based off of nginx-simple, with mysql and php running in separate containers. PHP runs as PHP-FPM on port 9000, and has pdo_mysql installed for easy db connection management.

Has 4 services:
- nginx
- php
- mysqldb
- adminer

"adminer" is a simple phpmyadmin-like db admin interface, in this case available at port 8081.
nginx is available at port 8090.

# Building the container

Clone this repository, and use the docker-compose.yml file provided here: `docker-compose build`

## Normal usage

  `docker-compose up -d`
  `docker-compose down`


