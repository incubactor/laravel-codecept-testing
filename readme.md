## Automated API Testing Laravel Using JWT and Codeception

[![Build Status](https://travis-ci.org/didikz/laravel-codecept-testing.svg?branch=master)](https://travis-ci.org/didikz/laravel-codecept-testing)

Coding exercise & automated API testing Laravel using JWT and Codeception.
## Installation
+ Clone repo
+ Run `composer install`

# Database
When using sqllite then:
+ Create `database.sqlite` inside database directory

When using mysql then:

```
mysql -u dbuser -p
mysql> CREATE DATABASE angularskeleton;
Query OK, 1 row affected (0.00 sec)

mysql> GRANT ALL ON angularskeleton.* TO 'dbuser'@'localhost';
Query OK, 0 rows affected (0.02 sec)

mysql> quit 

php artisan make:migration create_users_table
```

## Run Tests
Simply run `./vendor/bin/codecept run api`

or

run `./vendor/bin/codecept run api` to display executed steps

## Our Tools

- **[Laravel](https://laravel.com)**
- **[Codeception](http://codeception.com/)**
- **[tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)**

## Contributing

Feel free to modify and send pull request.
