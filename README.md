# TO-DO LIST - PHP, MySQL, Composer, and JavaScript

This is a simple TO-DO list application built using PHP, MySQL, Composer, and JavaScript. The application allows users to create, view, edit, and mark tasks as completed.

## Requirements

- PHP 5.6 or higher
- MySQL database
- Composer

## Installation

1. Clone the repository to your local environment:

https://github.com/AmaiaAbaroa/PHP---TO-DO-LIST.git

2. Navigate to the project directory:

cd to-do-list

3. Install dependencies using Composer:

composer install

4. Set up the MySQL database:

   - Create a new database named `to-do-list` (you can use a different name if desired).
   - Import the database schema from the `database.sql` file located in the `sql` directory.

5. Configure the database connection:

   - Rename the `config.example.php` file in the `src` directory to `config.php`.
   - Open `config.php` and update the database credentials with your MySQL username, password, and database name.

6. Start the PHP development server:

php -S localhost:8000 -t public

7. Open your web browser and go to `http://localhost:8000` to access the TO-DO list application.

## Usage

- To add a new task, fill out the form in the "Create a new TO-DO List" section on the homepage and click "ADD TASK". The task will be added to the list below.
- To edit a task, click the "Edit" button next to the task you want to modify. You can update the task details and click "Save Changes" to save the updates.
- To mark a task as completed, click the radio button next to the task title. The task title will be crossed out to indicate completion.



