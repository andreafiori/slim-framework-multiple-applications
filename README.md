# Slim Framework 3

Based on the skeleton application, this project include the dependencies to let a developer work with Twig, 
databases, modules and a small MVC architecture.

## Install the Application

Run this command from the directory in which you want to install the application.

    composer install
    composer dumpautoload

You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

## Unit tests with PHPUnit

From the command line:
    
    cd test
    phpunit --bootstrap bootstrap.php . --stop-on-failure

## TODO

- Test fix. Update PHPUnit version
- Load plugin
- Load widgets
- Load message and translation
- Implement controller
- Load view from modules
