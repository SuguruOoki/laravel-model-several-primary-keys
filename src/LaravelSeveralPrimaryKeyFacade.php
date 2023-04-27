<?php

namespace LaravelSeveralPrimaryKey\LaravelSeveralPrimaryKey;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelSeveralPrimaryKey\LaravelSeveralPrimaryKey\Skeleton\SkeletonClass
 */
class LaravelSeveralPrimaryKeyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-several-primary-key';
    }
}
