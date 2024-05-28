# ReBoot

Welcome to the ReBoot repository! This project contains the code for the ReBoot website, which provides services for repairing PC components. This README will guide you through the setup process, usage, and other relevant information.

[![License](https://img.shields.io/badge/license-MIT-green)](./LICENSE)

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction

ReBoot is a web application designed to offer repair services for various PC components. This repository includes all the necessary code for the frontend and backend of the website.

## Features

- User-friendly interface for booking repair services
- Service listings with detailed descriptions
- User registration and login
- Admin panel for managing services and users
- Integration with PHPMyAdmin for database management

## Technologies Used

- **Frontend**: HTML, Tailwind CSS
- **Backend**: PHP
- **Database**: PHPMyAdmin (MySQL)

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/ReBoot.git
    cd ReBoot
    ```

2. **Set up the database**:
    - Import the provided SQL file into your PHPMyAdmin to set up the database schema and tables.
    - Update the database configuration in the PHP files (e.g., `$_SERVER['DOCUMENT_ROOT'] ."/reboot/Model/adminModel.php`).

3. **Install dependencies**:
    - Make sure you have PHP and a web server (e.g., Apache) installed.
    - No additional dependencies are required for HTML and Tailwind CSS as they are included via npm.

4. **Run the application**:
    - Start your web server and navigate to the project directory.
    - From you terminal run 'npm install'.
    - Compile the tailwind css with 'npx tailwindcss -i input.css -o styles.css --watch'
    - Open your browser and go to `http://localhost/ReBoot`.

> [!Note]
> You will find the SQL file under the Database branch.

## Usage

- **Home Page**: View and book repair services.
- **User Registration/Login**: Create an account or log in to access additional features.
- **Admin Panel**: Manage services, users, and view transactions (accessible to admin users only).

## Contributing

We welcome contributions to enhance the project. To contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a Pull Request.

> [!Important]
> Please ensure your code follows the project's coding standards and include appropriate tests.

> [!Tip]
> Always backup your database before making changes.

## License
> [!CAUTION]
> This project is licensed under the MIT License. Feel free to use and modify the code as per the terms of the license.

## Contact

If you have any questions or need further assistance, feel free to contact us:

- **Email**: ifte.phoenix@gmail.com
- **GitHub Issues**: [Create a new issue](https://github.com/ifte-13/ReBoot/issues)
