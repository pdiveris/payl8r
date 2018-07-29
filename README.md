# payl8r
A skeleton for payl8r's test to undertaken shortly. It sets a working superbasic MVC without any massive frameworks.

It's based on
* David Hollingworth's ["Write PHP Like a Pro: Build a PHP MVC Framework From Scratch"] (https://www.udemy.com/php-mvc-from-scratch/?couponCode=githubpa1) and
* [Dockerise your PHP application with Nginx and PHP7-FPM] (http://geekyplatypus.com/dockerise-your-php-application-with-nginx-and-php7-fpm/) by Geek Platypus (YEP, A PLATYPUS.)

The idea is that using a custom MVC I can do away with a series of uncharritable tasks (querys strings, routes but also namespaces etc.)

The whole thing is done with Composer and Docker.

Assuming that one will use the Docker image the steps should then be

* Fetch the repo (clone download the zip file)
* Run `composer update` to install the project dependencies
* Run `docker-compose up` to get it running

The site responds to the URL http://php-docker.local:8080/ which means that one extra step is required to set php-docker.local in your hosts file pointing to 127.0.0.1 - or the default index.html provided by nginx will show.

I have tested this on a "blank" environment and to my amesement it run just fine, but I have not tested the whole thing thoroughly.

