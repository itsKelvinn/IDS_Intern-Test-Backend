# Internship Test PT Inovasi Daya Solusi

## Description

This repository is for the internship test to join PT Inovasi Daya Solusi. The project focuses on backend development using Laravel for creating databases and APIs.

This project utilizes MySQL as the database management system and Laravel for the backend API development.

## Installation

1. Clone the repository `https://github.com/itsKelvinn/IDS_Intern-Test-Backend.git`. 
2. Run `composer install` to install dependencies.
3. Run `composer update` in case the compser oudated (Optional)
3. Create a copy of the `.env.example` file and rename it to `.env`.
4. Set up your database in the `.env` file.
5. Run `php artisan migrate` to migrate the database.

## Usage
After completing the installation steps, follow these instructions to run the project:

1. Launch the development server using php artisan serve.
2. Access the application via the provided URL.

Available Routes
The project provides the following API endpoints for interacting with products, transactions, and authentication:


**Product Routes**

| Method | Endpoint                          | Description                          |
|--------|-----------------------------------|--------------------------------------|
| GET    | /product                          | Retrieve a list of all products      |
| POST   | /product                          | Create a new product                 |
| PUT    | /product/{productId}              | Update a specific product            |


**Transaction Routes**

| Method | Endpoint                          | Description                          |
|--------|-----------------------------------|--------------------------------------|
| GET    | /transaction                      | Retrieve a list of all transactions  |
| POST   | /transaction                      | Create a new transaction             |
| PUT    | /transaction/{transactionId}      | Update a specific transaction        |


**Authentication Routes**

| Method | Endpoint                          | Description                          |
|--------|-----------------------------------|--------------------------------------|
| POST   | /auth/signin                      | Sign in to the application           |
| POST   | /auth/register                    | Register a new user                  |


Ensure that the database has been set up correctly and that the appropriate database credentials are specified in the .env file.


## Contact
For any inquiries or further information, please reach out to my email kelvin.giovanno@binus.ac.id
