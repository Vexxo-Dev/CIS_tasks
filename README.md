# Simple Calculator

A web-based calculator built with PHP that performs basic arithmetic operations.

## Features

- Accepts two numbers as input
- Supports four operations:
  - Addition (+)
  - Subtraction (-)
  - Multiplication (*)
  - Division (/)
- Returns the result of the selected operation
- Handles division by zero with a clear error message
- Input validation for non-numeric values

## How to Run

### Option 1: PHP Built-in Server

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd cis_tasks
   ```
2. Start the PHP development server:
   ```bash
   php -S localhost:8000
   ```
3. Open your browser and go to `http://localhost:8000`.

### Option 2: XAMPP / WAMP / MAMP

1. Copy the project folder into your web server's document root (e.g., `htdocs` for XAMPP).
2. Start Apache from the control panel.
3. Open your browser and go to `http://localhost/cis_tasks`.

## Usage

1. Enter the first number.
2. Select an operation from the dropdown.
3. Enter the second number.
4. Click **Calculate** to see the result.
