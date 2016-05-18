# Laravel Database

Provides full laravel database functionality for your non laravel projects adds Migration, Seeding and Artisan support to Illuminate Database.


[Laravel](https://github.com/laravel/laravel) is a web application framework with expressive, elegant syntax. We extracted the database functionality from it and made it available for other frameworks

The [Illuminate Database](https://github.com/illuminate/database) component is a full database toolkit for PHP, providing an expressive query builder, ActiveRecord style ORM, and schema builder. It currently supports MySQL, Postgres, SQL Server, and SQLite. We combined it with Illuminate FileSystem and Illuminate Console to make Artisan work with database related commands.

## Installation

### Install Composer

Laravel Database utilizes [Composer](http://getcomposer.org/) to manage its dependencies. First, download a copy of the `composer.phar`. Once you have the PHAR archive, you can either keep it in your local project directory or move to `usr/local/bin` to use it globally on your system. On Windows, you can use the Composer [Windows installer](https://getcomposer.org/Composer-Setup.exe).

### Install Laravel Database

Install Laravel Database by issuing the Composer create-project command in your terminal:

	composer create-project laravel/database --prefer-dist

## Usage Instructions

From your public `index.php` include the `autoload.php` in `bootstrap` folder this internally uses composer autoloader. 
This enables lazy loading of all db related classes. Only when you call one of the DB related class, database engine is initialized.

Even when using version `5.2.*` the folder structure will be the same as `4.2.*`

## Adding More Components

For instructions on how to add more laravel components or compatible third party service providers etc., read the comments
in `app/config/app.php` file

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs). Refer to all database related sections from there.

> Note:- For folder structure refer to version 4.2 of the documentation, for everything else refer to the version corresponding to the version you use here


### Credits

All the credits for the Laravel Database goes to the Laravel Framework developers. We are only putting the pieces together here

### Contributing

**Issues and pull requests relating to this integration should be filed on the [laravel/database](http://github.com/Luracast/Laravel-Framework) repository.**

### License

The Laravel Database is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)