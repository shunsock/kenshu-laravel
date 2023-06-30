# Kenshu Laravel
## What is this
- PR TIMES training Laravel repository.

## Usage
- Before using this repository, you need to install docker and docker-compose.
- And you need to install composer and laravel.
- After installing, you need to edit .env file like below.

``` .env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=root
DB_PASSWORD=********
```

```terminal
git clone repository
rm -rf src/ // if you want to initialize your project
docker compose up -d --build
docker compose exec app php artisan make:migration db
```

## Directory Structure

- compose.yml
    - Docker Compose file.
- docker
    - app
        - Dockerfile for app container.
    - db
        - Dockerfile for db container.
    - web
        - Dockerfile for web container.
- src
    - application
    - Laravel code is here.

```terminal
.
├── compose.yml
├── docker
│   ├── app
│   ├── db
│   └── web
└── src
    ├── README.md
    ├── app
    ├── artisan
    ├── bootstrap
    ├── composer.json
    ├── composer.lock
    ├── config
    ├── database
    ├── package.json
    ├── phpunit.xml
    ├── public
    ├── resources
    ├── routes
    ├── server.php
    ├── storage
    ├── tests
    ├── vendor
    └── webpack.mix.js

16 directories, 9 files
```
