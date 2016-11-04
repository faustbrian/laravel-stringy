# Laravel Stringy

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```js
composer require faustbrian/laravel-stringy:1.0.*@dev
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    BrianFaust\Stringy\ServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    // ... Illuminate Facades
    'Stringy' => BrianFaust\Stringy\Facades\Stringy::class
];
```

## License

Laravel Stringy is licensed under [The MIT License (MIT)](LICENSE).
