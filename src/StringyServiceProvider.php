<?php



declare(strict_types=1);



namespace BrianFaust\Stringy;

use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Stringy\StaticStringy;

class StringyServiceProvider extends IlluminateProvider
{
    public function register(): void
    {
        $this->app->singleton('stringy', function ($app) {
            return new StaticStringy();
        });
    }
}
