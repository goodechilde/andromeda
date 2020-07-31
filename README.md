# Base Laravel Install with Docker
This is a base Laravel 7 install that includes basics that I use for all projects including:
- <a href="https://github.com/phpro/grumphp">GrumPHP</a>
- <a href="https://github.com/vimeo/psalm">Psalm</a>
- <a href="https://github.com/squizlabs/PHP_CodeSniffer">Php Codesniffer</a>
- <a href="https://github.com/spatie/laravel-query-builder">Spatie Laravel Querybuilder</a>
- <a href="https://docs.spatie.be/laravel-permission/v3/">Spatie Laravel Permissions</a>
- <a href="https://github.com/innoflash/steroid-seeder">InnoFlash Steroid Seeder</a>
- <a href="https://github.com/mikebarlow/laravel-response-helpers">Laravel Response helpers </a>
- <a href="https://github.com/goodechilde/arche">Arche API CRUD Generators </a>
- <a href="https://github.com/AMBERSIVE/laravel-packagemaker">Laravel Package Maker</a>
- <a href="https://scribe.readthedocs.io/en/latest/index.html">Scribe APIDoc Generator </a>
- <a href="https://davidhsianturi.com/laravel-compass/installation/">Laravel Compass </a>
- <a href="https://laravel.com/docs/7.x/passport#installation">Laravel Passport </a>
- <a href="https://laravel.com/docs/7.x/frontend">Laravel UI Scaffold </a>
- <a href="https://github.com/goodechilde/common-contact">Goodechilde Common Contact</a>
- <a href="https://github.com/goodechilde/gc-notes">Goodechilde Notes</a>
- <a href="https://github.com/goodechilde/gc-tags">Goodechilde Tags</a>
- Snake CamelCase Middleware (coded based on another package)
- Laravel Helpers
- GuzzleHTTP

## Configure docker
```
cp .env.example .env
```

Edit the Nginx and Postgres ports to not conflict with other things you have on your system
```
POSTGRES_PORT=5432
NGINX_PORT=8080
```

Then just run Docker Compose
```
docker-compose up -d
```

## Getting started
After cloning the project and getting docker running
```
composer install
```
After composer runs all it needs
```
php artisan key:generate
php artisan migrate
php artisan passport:install
```

Select the frontend scaffold you want
```bash
php artisan ui react --auth or php artisan ui vue --auth
npm install && npm run dev
```
