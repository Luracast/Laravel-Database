# Laravel Database

Provides full laravel database functionality for your non laravel projects adds 
Migration, Seeding and Artisan support to Illuminate Database.

It enables **artisan** command line tool with:

```
Available commands:

  db                Start a new database CLI session
  dump-autoload     Regenerate framework autoload files
  env               Display the current framework environment
  help              Display help for a command
  inspire           Display an inspiring quote
  list              List commands
  migrate           Run the database migrations
  serve             Serve the application on the PHP development server
  tinker            Interact with your application
  
db
  db:seed           Seed the database with records
  db:wipe           Drop all tables, views, and types

make
  make:command      Create a new Artisan command
  make:controller   Create a new controller class
  make:factory      Create a new model factory
  make:migration    Create a new migration file
  make:model        Create a new Eloquent model class
  make:seeder       Create a new seeder class
  
migrate
  migrate:fresh     Drop all tables and re-run all migrations
  migrate:install   Create the migration repository
  migrate:refresh   Reset and re-run all migrations
  migrate:reset     Rollback all database migrations
  migrate:rollback  Rollback the last database migration
  migrate:status    Show the status of each migration
  
vendor
  vendor:publish    Publish any publishable assets from vendor packages
```

[Laravel](https://github.com/laravel/laravel) is a web application framework with expressive, elegant syntax. 
We extracted the database functionality from it and made it available for other frameworks.

The [Illuminate Database](https://github.com/illuminate/database) component is a full database toolkit for PHP, 
providing an expressive query builder, ActiveRecord style ORM, and schema builder. It currently supports 
MySQL, Postgres, MSSQL Server, and SQLite. We combined it with Illuminate FileSystem and Illuminate Console to 
make Artisan work with database related commands.

## Installation

### Install Composer

Laravel Database utilizes [Composer](http://getcomposer.org/) to manage its dependencies. 
First, download a copy of the `composer.phar`. Once you have the PHAR archive, 
you can either keep it in your local project directory or move to `usr/local/bin` 
to use it globally on your system. On Windows, you can use the Composer 
[Windows installer](https://getcomposer.org/Composer-Setup.exe).

### Install Laravel Database

Install Laravel Database by issuing the Composer create-project command in your terminal:

    composer create-project laravel/database --prefer-dist

## Usage Instructions

From your public `index.php` include the `autoload.php` in `bootstrap` folder this internally uses composer autoloader. 
This enables lazy loading of all db related classes. It doest not boot the database engine until you call one 
of the DB related class.

### Adding More Components

For instructions on how to add more laravel components or compatible third party service providers etc., 
read the comments in `app/config/app.php` file

### Practical Usage Example

- [Restler Application Eloquent Template](https://github.com/Luracast/Restler-Application/tree/eloquent) enables
  restler framework application's to utilize the power and elegance of *eloquent*

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs). 
Refer to all database related sections from there.


### Credits

All the credits for the Laravel Database goes to the Laravel Framework developers. 
We are only putting the pieces together here

### Contributing

**Issues and pull requests relating to this integration should be filed 
on the [laravel/database](http://github.com/Luracast/Laravel-Framework) repository.**

### License

The Laravel Database is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
