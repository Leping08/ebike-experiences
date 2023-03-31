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
4.  Run `npm run dev` to compile assets
5.  Create a MySQL database
6.  Copy `.env.example` to `.env` and update the database credentials

## Usage

### Development

Run `nvm use` then `npm watch` to watch for changes to assets and compile them automatically.

Run `php artisan serve` to start the development server.

### Production

Run `nvm use` then `npm prod` to compile assets for production.

Run `php artisan serve --env=production` to start the production server.

## License

The eBike Experiences website is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
