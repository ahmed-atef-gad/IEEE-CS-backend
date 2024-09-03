# Task 3.2 - SQLite RESTful API

## Database Schema
- **users**:
  - `id`: Integer, Primary Key, Auto-increment
  - `name`: String, Required
  - `email`: String, Required, Unique

## API Endpoints
- `POST /users`: Add a new user
- `GET /users`: Retrieve all users
- `GET /users/{id}`: Retrieve a user by ID
- `PUT /users/{id}`: Update a user's information
- `DELETE /users/{id}`: Delete a user

## Setup Instructions
1. Clone the repository.
2. Navigate to `task-3.2`.
3. Run `composer install`.
4. Set up the `.env` file for SQLite.
5. Run `php artisan migrate` to create the database and tables.
6. Use Postman or similar tool to interact with the API.
