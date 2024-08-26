# Hello-World API

## Endpoints

### 1. GET /hello/{name}

- **Description:** Returns a personalized greeting. If the name is new, it will return a first-time greeting; otherwise, it will return a repeat greeting.
- **Example Request:** `GET /hello/Mohamed`
- **Example Response:** `Hello, Mohamed!` or `Hello again, Mohamed!`

### 2. GET /names

- **Description:** Returns a list of all stored names. If no names are stored, returns a message indicating that.
- **Example Request:** `GET /names`
- **Example Response:** `Mohamed John Walter-White` Or `No names found.` if the file is empty.

## Setup Instructions

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Run `php artisan serve` to start the Laravel development server.
4. Use a tool like Postman or your browser to test the endpoints.
