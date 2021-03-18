<?php

namespace Tooshay\ModelSearch;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tooshay\ModelSearch\ModelSearch
 */
class ModelSearchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-model-search';
    }
}
