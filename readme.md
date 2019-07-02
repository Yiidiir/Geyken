# Geyken

REST API Server to generate & manage keys

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

Geyken uses Laravel 5.7 framework, that requires: 

```
PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension
JSON PHP Extension
BCMath PHP Extension
```

For Geyken to work properly, it requires a set of other technologies:

```
MySQL Server 4.8+
Nginx or Apache Webserver
```

### Installing

#### Installing Dependencies
 1. Install Composer:  
 [Check the official website](https://getcomposer.org/download/) for relevant information on how to install it for your OS.
 2. Install Dependencies:
 ```
 composer install
 ```
#### Setting up the environment
1. Set environment file ``cp .env.example .env``
2. Change MySQL configuration to your server's details
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
```

3.Migrate Database:  
 ```
 php artisan migrate:fresh
 ```
This will create the needed database tables, relationships and keys for the app to work properly.
You can use the ``--seed`` flag to feed the database with fake data (Fake product keys & names).

Now navigate to your webserver root URL after adding the prefix `/api/keys` and you should see all the existing product keys.

Eg. If you're using Wampserver on Windows, the default URL for apache is `http://localhost` so you need to navigate to 

```
http://localhost/api/keys
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

### Unit tests
Laravel comes preconfigured with ``phpunit`` so it's pretty easy to run unit tests, just execute:
```
phpunit
```
### Break down into end to end tests

Laravel comes with `Dusk` as a e2e testing engine

>Laravel Dusk provides an expressive, easy-to-use browser automation and testing API. By default, Dusk does not require you to install JDK or Selenium on your machine. Instead, Dusk uses a standalone ChromeDriver installation. However, you are free to utilize any other Selenium compatible driver you wish.

Simply execute
```
php artisan dusk:install
```

### And coding style tests

Laravel doesn't come with a coding style testing framework but if you want to test your code against the PSR-2 standard, you can set it up manually: 
1. First install php codesniffer
```
composer require --dev squizlabs/php_codesniffer
```
2. Check the code 
```
php vendor/bin/phpcs --standard=psr2 src/ -n
```
3. Fix your code's style
```
php vendor/bin/phpcs --standard=psr2 src/ -n
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

