# Shop Name

[![Build Status](https://img.shields.io/travis/username/repo.svg)](https://travis-ci.org/username/repo)
[![License](https://img.shields.io/github/license/username/repo.svg)](https://github.com/username/repo/blob/master/LICENSE)

## Description

This is a shop developed using Laravel Lunar. It provides a platform for users to browse and purchase products.

## Features

-   User authentication and registration
-   Product catalog with search and filtering options
-   Shopping cart functionality
-   Order management
-   Payment integration
-   Admin dashboard for managing products, orders, and users

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/Edward-Kabue/Lunar_ecommerce.git
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration in the `.env` file.

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Run database migrations:

    ```bash
    php artisan migrate
    ```

6. Start the development server:

    ```bash
    php artisan serve
    ```

7. Visit `http://localhost:8000` in your web browser to access the shop.

## Contributing

Contributions are welcome! Please read the [contribution guidelines](CONTRIBUTING.md) for more information.

## License

This project is licensed under the [MIT License](LICENSE).
