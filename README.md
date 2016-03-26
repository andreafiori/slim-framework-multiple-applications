# Slim Framework 3

Based on the skeleton application, this project include the dependencies to let a developer work with Twig, 
databases, modules and a small MVC architecture.  

## Install the Application

Run this command from the directory in which you want to install the application.

    php install

You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

## Resources
- [Slim official website](http://www.slimframework.com/)
- [Akrabat Slim 3 skeleton app](https://github.com/akrabat/slim3-skeleton)
	- [Doctrine Integration](http://blog.sub85.com/slim-3-with-doctrine-2.html)
- Controllers using Slim
	- [Automatic Controllers](http://juliangut.com/blog/slim-controller)
	- [Slim Controllers](https://github.com/fortrabbit/slimcontroller)
- Database
	- Doctrine 2
	- [Eloquent Oci8](ttps://github.com/yajra/laravel-oci8)	
	- [Eloquent, Slim, Twig](http://fullstackstanley.com/read/using-eloquent-twig-and-slim-php)
- Multilingual \ Internationalization
    - [https://github.com/briannesbitt/Slim-Multilingual](https://github.com/briannesbitt/Slim-Multilingual)

## Unit tests with PHPUnit

From the command line:
    
    cd test
    phpunit --bootstrap bootstrap.php . --stop-on-failure

## TODO

- Load plugin
- Load widgets
- Load message and translation
- Implement controller
- Load view from modules
