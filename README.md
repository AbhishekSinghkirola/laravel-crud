# Laravel CRUD Application

This is a learning project of Laravel CRUD application that allows you to manage posts. It provides basic Create, Read, Update, and Delete operations for your posts.

## Features

-   Create, view, update, and delete posts.
-   Assign categories to posts.
-   User-friendly interface built with Bootstrap for a responsive design.

## Installation

Follow these steps to get the application up and running:

1. Clone the repository:

```bash
  git clone https://github.com/AbhishekSinghkirola/laravel-crud
```

2. Change into the project directory:

```bash
  cd laravel-crud
```

3. Install the dependencies using Composer:

```bash
  composer update
```

4. Configure the database connection in the `.env` file with your database credentials:

```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
```

5. Migrate the database:

```bash
  php artisan migrate
```

6. Start the development server:

```bash
  php artisan serve
```

7. Open your web browser and visit http://localhost:8000 to see the application.

## Usage/Examples

-   To create a new post, click on the "Create" button and provide the necessary information.
-   To view, update, or delete a category or post, navigate to the respective sections and use the provided actions.
-   To view the Trashed Posts, click on the "Trashed" button.
-   The application includes validation to ensure data integrity and proper input.

## Credits

-   Laravel: https://laravel.com/
-   Bootstrap: https://getbootstrap.com/
