# Emineto
A new Logarithm

## Backend Installation
1. Run  `composer install` from inside the project directory to download PHP dependencies
2. Run `cp .env.example .env` to make your projects' .env file
3. Run `php artisan key:generate` to create a new encryption key
4. Open the `.env` file you have created and update your MYSQL database credidentials 
5. In the terminal, run `php artisan migrate` to migrate your database
6. Then run `php artisan db:seed` to seed the database

### Serving Emineto
7. Run `php artisan serve` to launch the application on http://localhost:8000


## Frontend Installation
1. Ensure npm is installed
1. Navigate to public/
1. Run `npm install`

### Serving Emineto Frontend
1. Navigate to public/
1. Run `gulp` to launch background gulp processes
