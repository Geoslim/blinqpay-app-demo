
## Blinqpay Demo

Blinqpay demo app demonstrating the use of a blinqpay payment solution

### Start up

To start project, perform the following steps in the order

- Clone the repository by running the command
- git clone 'https://github.com/Geoslim/blinqpay-app-demo.git'
- cd blinqpay-app-demo
- Run `composer install`
- Run `cp .env.example .env`
- Fill your configuration settings in the '.env' file you created above
- Run `php artisan key:generate`
- Run `php artisan migrate --seed`
- Run `php artisan serve`

Make use of the endpoint below and make a POST request with any sample body of choice
```php
//baseUrl = 127.0.0.1:8080
{{baseUrl}}/api/v1/pay

{
    "amount": 200,
    "currency": "EUR"
}
```
