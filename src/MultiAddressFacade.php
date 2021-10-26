<?php

namespace zoparga\MultiAddress;

use Illuminate\Support\Facades\Facade;

/**
 * @see \zoparga\MultiAddress\MultiAddress
 */
class MultiAddressFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-multi-address';
    }
}
