# Chat App

## What is Chat App?

Chat App is a simple chat application built to demonstrate the usage of MVC architecture in building CRUD applications and websocket for real-time communication.

  <img src="https://user-images.githubusercontent.com/56353860/187077741-8035a14d-8b5a-47e2-ade9-bf65d137cf1f.png">
</p>
<p align="center">
  <img height="700" src="https://user-images.githubusercontent.com/56353860/187078161-f3b32235-115d-45ca-b118-21bf9ff7f8d6.png">
</p>


## Database

For MySQL database, specify the following value in the `.env` file with your own database details.

- `database.default.hostname`
- `database.default.database`
- `database.default.username`
- `database.default.password`
- `database.default.DBDriver = MySQLi`
- `database.default.port`

One of the way to setup local database is using XAMPP.

## Installation

- Run `composer install` in the project directory.
- Run `php spark migrate --all`.

## Running on Localhost

You may run the application locally by using the following command on the project directory:

`php spark serve`

It is also possible to host the application on XAMPP by placing the project folder inside the `htdocs` folder of XAMPP.

To allow real-time communication, a separate process handling websocket communication needs to be run. Run the following command inside the `public` folder of the project:

`php index.php serve`
