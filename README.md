# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project slim/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

That's it! Now go build something cool.

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

## Testing
cd test
phpunit --bootstrap bootstrap.php . --stop-on-failure
