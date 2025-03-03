## Local Development Instructions

### Prerequisites

- [Node.js](https://nodejs.org/en/download/)
- [Yarn](https://yarnpkg.com/en/docs/install)
- PHP 8.2 or higher
- Composer

### Installation

1. Clone the repository or Download the zip file and extract it
2. copy the `.env.example` file to `.env` and update the database credentials
3. Run `npm install` to install the dependencies
4 Run `composer install` to install the dependencies
5. Run `npm run dev` to build the assets
6. Run `php artisan serve` to start the server or use `php -S localhost:8000 -t public` to start the server
7. Visit `http://localhost:8000` in your browser


* Model Post  
* table posts