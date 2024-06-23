# Laravel CRUD Application

[![Tests](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/run-tests.yml/badge.svg)](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/run-tests.yml)
[![Browser Tests](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/browser-tests.yml/badge.svg)](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/browser-tests.yml)
[![Fix Code Style](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/lint.yml/badge.svg)](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/lint.yml)
[![Larastan](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/larastan.yml/badge.svg)](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/larastan.yml)
[![PHP Insights](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/php-insights.yml/badge.svg)](https://github.com/phi-rakib/laravel-blade-crud/actions/workflows/php-insights.yml)

This project is a simple demonstration of how to implement CRUD (Create, Read, Update, Delete) operations in a Laravel application using Blade templating. The application focuses on managing a list of products through a single controller, the ProductController.

## Features

- **Create**: Add new products to the database.
- **Read**: View a list of all products.
- **Update**: Edit the details of existing products.
- **Delete**: Remove products from the database.

## Technologies Used

- **Laravel**: A PHP framework for web artisans.
- **Blade**: The simple, yet powerful templating engine provided with Laravel.
- **MySQL**: A relational database management system.

## Project Structure

### Controller

The application includes one controller:

- **ProductController**: Handles all CRUD operations related to products.

### Views

The Blade templates used in this application are:

- `index.blade.php`: Displays a list of all products.
- `create.blade.php`: Form to create a new product.
- `edit.blade.php`: Form to edit an existing product.
- `show.blade.php`: Displays the details of a single product.

### Routes

The routes for the application are defined in `web.php` and follow RESTful conventions:

- `GET /products`: Display a list of all products.
- `GET /products/create`: Show the form to create a new product.
- `POST /products`: Store a new product in the database.
- `GET /products/{id}`: Display a specific product.
- `GET /products/{id}/edit`: Show the form to edit a product.
- `PUT /products/{id}`: Update a product in the database.
- `DELETE /products/{id}`: Delete a product from the database.


## Installation

- Clone the repository
```bash
git clone https://github.com/phi-rakib/laravel-blade-crud.git
```

- change directory to laravel-blade-crud
```bash
cd laravel-blade-crud
```

- Install the dependencies
```bash
composer install
```
- Create database
- Copy the environment file
```bash
cp .env.example .env
```
- Configure the `.env` file to match your database settings.
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-db-user-name
DB_PASSWORD=your-db-password
```
- Run the migrations
```bash
php artisan migrate
```
- Seed database
```bash
php artisan db:seed
```
- Start the local development server
```bash
php artisan serve
```
## Usage

1. Navigate to `http://localhost:8000/products` to see the list of products.
2. Use the provided forms to add, edit, and delete products.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contributing

If you wish to contribute, please fork the repository and submit a pull request.