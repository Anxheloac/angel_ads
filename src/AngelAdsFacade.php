<?php

namespace Anxheloac\AngelAds;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Anxheloac\AngelAds\Skeleton\SkeletonClass
 */
class AngelAdsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'angel_ads';
    }
}
