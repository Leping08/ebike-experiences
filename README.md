# eBike Experiences

A website to shocase the eBike Experiences of Florida.

## Installation

### Prerequisites

-   [Node.js](https://nodejs.org/en/)
-   [Npm](https://www.npmjs.com/)
-   [Nvm](https://github.com/nvm-sh/nvm)
-   [PHP](https://www.php.net/)
-   [Composer](https://getcomposer.org/)
-   [MySQL](https://www.mysql.com/)
-   [Laravel](https://laravel.com/)

### Setup

1.  Clone the repository
2.  Run `composer install` to install PHP dependencies
3.  Run `npm install` to install JavaScript dependencies
4.  Run `nvm use` to use the correct version of Node.js
5.  Run `npm run dev` to compile assets
6.  Create a MySQL database
7.  Copy `.env.example` to `.env` and update the database credentials
8.  Run `php artisan key:generate` to generate an application key
9.  Run `php artisan serve` to run start the dev server

## Usage

### Development

Run `nvm use` then `npm run dev` to watch for changes to assets and compile them automatically.

Run `php artisan serve` to start the development server.

### Production

Run `nvm use` then `npm prod` to compile assets for production.

Run `php artisan serve --env=production` to start the production server.

## License

The eBike Experiences website is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
