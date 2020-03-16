<?php

namespace Metalcamp\LaravelPackageBoilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Metalcamp\LaravelPackageBoilerplate\Skeleton\SkeletonClass
 */
class LaravelPackageBoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-boilerplate';
    }
}
