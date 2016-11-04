<?php

namespace BrianFaust\Stringy\Facades;

use Illuminate\Support\Facades\Facade;

class Stringy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'stringy';
    }
}
