<?php

namespace ProVision\MetaTags\Facades;

use Illuminate\Support\Facades\Facade;

class MetaTag extends Facade
{
    /**
     * Name of the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'MetaTag';
    }
}
