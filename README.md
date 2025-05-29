# User Registration System

## Overview
This project is a user registration system built using PHP. It provides functionality for users to register and manage their accounts. The system uses a MySQL database to store user information securely.

## Project Structure
```
php-user-registration
├── src
│   ├── Database.php
│   ├── User.php
│   └── config
│       └── config.php
├── sql
│   └── schema.sql
├── public
│   ├── index.php
│   └── register.php
├── composer.json
└── README.md
```

## Requirements
- PHP 7.4 or higher
- MySQL
- Composer

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd php-user-registration
   ```
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Set up the database:
   - Create a new MySQL database.
   - Import the `sql/schema.sql` file to create the necessary tables.

## Configuration
- Update the database credentials in `src/config/config.php` to match your database setup.

## Usage
- Access the application by navigating to `public/index.php` in your web browser.
- Use `public/register.php` to register a new user.

## Contributing
Feel free to submit issues or pull requests for improvements or bug fixes.

## License
This project is licensed under the MIT License.