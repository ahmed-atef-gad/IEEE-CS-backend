# Task 4.1 - Todo CRUD operations

## Database Schema

- **users**:
  - `id`: Integer, Primary Key, Auto-increment
  - `title`: String, Required
  - `description`: String, Required
  - `is_completed`: boolean, Required

## API Endpoints

- `POST /todos`: Add a new TODO item to the list
- `GET /todos`: Retrieve the list of all TODO items
- `GET /todos/{id}`: Retrieve a specific TODO item by its ID
- `PUT /todos/{id}`: Update an existing TODO item by its ID
- `DELETE /todos/{id}`: Remove a TODO item by its ID

## Setup Instructions

1. Clone the repository.
2. Navigate to `task-4.1`.
3. Run `composer install`.
4. Set up the `.env` file for SQLite.
5. Run `php artisan migrate` to create the database and tables.
6. Use Postman or similar tool to interact with the API.
