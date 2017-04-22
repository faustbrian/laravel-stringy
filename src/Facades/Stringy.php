<?php



declare(strict_types=1);



namespace BrianFaust\Stringy\Facades;

use Illuminate\Support\Facades\Facade;

class Stringy extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'stringy';
    }
}
