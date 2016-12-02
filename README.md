# Laravel Stringy

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```js
composer require faustbrian/laravel-stringy
```

And then include the service provider within `app/config/app.php`.

```php
BrianFaust\Stringy\StringyServiceProvider::class
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'Stringy' => BrianFaust\Stringy\Facades\Stringy
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
