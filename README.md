# Laravel-learn

## Laravel

### [Install Laravel](https://github.com/datlt4/PHP-learn/blob/main/README.md#install-laravel)

### Create project

```bash
composer create-project laravel/laravel Laravel-learn
```

- Reinstall dependencies

```bash
composer update
composer install
```

### VSCode Extension should be installed

- Laravel Blade Snippets - Winnie Lin

- Laravel Artisan - Ryan Naddy

- Laravel Blade Spacer - Austen Cameron

- Laravel goto view - codingyu

- Live Sass Compiler - Glenn Marks

- Beautify css/sass/scss/less - michelemelluso

- Getter and Setter Generator - Agustin Martinez Ibarra

- Bracket Pair Colorization Toggler - Dzhavat Ushev

- JavaScript (ES6) code snippets - charalampos karypidis

### Start Server

```bash
php artisan serve
php artisan serve --port 5500
php artisan serve --host <ip> --port <port>
```

```bash
php artisan list
php artisan make:controller Products
php artisan make:controller Products --force
php artisan make:controller Pages
php artisan make:controller Posts

php artisan make:model PostModel
php artisan make:migration create_table_posts
php artisan make:model PostModel -m 
```

```bash
php artisan storage:link
```

### SCSS

```bash
curl -s https://deb.nodesource.com/setup_16.x | sudo bash
sudo apt install nodejs -y
node -v
sudo apt install npm -y
sudo npm install -g npm@latest

mkdir resources/scss
touch resources/scss/app.scss
```

```bash
npm install
npm run dev
npm run watch
```

### Manipulate with MySQL

```bash
sudo apt install --assume-yes mariadb-server mariadb-client -y
sudo mysql -u root -p

CREATE USER '<username>'@'localhost' IDENTIFIED BY '<password>';
GRANT ALL ON <table_name>.* TO '<username>'@'localhost';
FLUSH PRIVILEGES;
QUIT;
```

```bash
sudo mysql -u <username> -p

CREATE DATABASE <table_name>;
```

```bash
php artisan db mysql
```

```bash
php artisan make:model PostModel
php artisan make:migration create_posts
php artisan make:model PostModel -m 
```

```bash
php artisan migrate
php artisan migrate:reset       # Call function down
php artisan migrate:refresh     # refresh = rollback + migrate
php artisan migrate:fresh       # fresh: delete all tables and migrate
php artisan migrate:status
```

```bash
# Factory is where to generate dummy data
php artisan make:factory PostModelFactory           # Factory name in format: <model_name>Factory
php artisan make:factory PostModelFactory --model=PostModel
```

```bash
php artisan tinker

> \App\Models\PostModel::factory()->create();
> \App\Models\PostModel::factory()->count(20)->create();
```

```bash
php artisan route:list
```

## [Request in Laravel 8](https://toidicode.com/request-trong-laravel-8-phan-1-451.html)

```bash
php artisan make:controller User
```

## Important Directory

```
app/Http/Controllers
app/Models

database/factories
database/migrations

public/storage

resources/views

routes/web.php
```

## Install laravel environment

```bash
cp .env.example .env
composer install
php artisan key:generate
npm install 
php artisan migrate:refresh && php artisan module:seed Common && php artisan module:seed Tool && php artisan passport:install
npm run production
```