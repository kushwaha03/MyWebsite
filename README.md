
## System Requirements
To be able to run Laravel Boilerplate you have to meet the following requirements:
- PHP > 7.0
- PHP Extensions: PDO, cURL, Mbstring, Tokenizer, Mcrypt, XML, GD
- Node.js > 6.0
- Composer > 1.0.0

## Installation
1. Install Composer using detailed installation instructions [here](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
2. Install Node.js using detailed installation instructions [here](https://nodejs.org/en/download/package-manager/)
3. Clone repository
```
$ git clone https://github.com/kushwaha03/MyWebsite.git/
```
4. Change into the working directory
```
$ cd MyWebsite
```
5. Copy `.env.example` to `.env` and modify according to your environment
```
$ cp .env.example .env
```
6. Install composer dependencies
```
$ composer install --prefer-dist
```
7. An application key can be generated with the command
```
$ php artisan key:generate
```
8. Execute following commands to install other dependencies
```
$ npm install
$ npm run dev
```
9. Run these commands to create the tables within the defined database and populate seed data
```
$ php artisan migrate --seed
```

## Run

To start the PHP built-in server
```
$ php artisan serve --port=8080
or
$ php -S localhost:8080 -t public/
```

Now you can browse the site at [http://localhost:8080](http://localhost:8080)  🙌



some screenshort our website 

![screenshot from 2018-05-06 02-25-51](https://user-images.githubusercontent.com/33350985/39667519-b665c4be-50d5-11e8-890a-22c4e86735c2.png)
![screenshot from 2018-05-06 02-26-07](https://user-images.githubusercontent.com/33350985/39667520-b6a82ee4-50d5-11e8-9292-e9b229b10abd.png)
![screenshot from 2018-05-06 02-26-23](https://user-images.githubusercontent.com/33350985/39667521-b6ea8226-50d5-11e8-9294-3b716ad4ef6d.png)
![screenshot from 2018-05-06 02-26-38](https://user-images.githubusercontent.com/33350985/39667522-b73940b4-50d5-11e8-9304-da95c1c1f785.png)
![screenshot from 2018-05-06 02-26-49](https://user-images.githubusercontent.com/33350985/39667523-b77bb78c-50d5-11e8-9391-fd8faa7ab17b.png)
![screenshot from 2018-05-06 00-35-49](https://user-images.githubusercontent.com/33350985/39667517-b59e6996-50d5-11e8-9545-965d24fa0922.png)
![screenshot from 2018-05-06 00-36-21](https://user-images.githubusercontent.com/33350985/39667518-b62bcd40-50d5-11e8-97f3-d1a0b5f49d9f.png)
## License

This boilerplate is open-sourced software licensed under the [MIT license](LICENSE).
