<?php
namespace Ribafs\Laravel6Acl\Facades;

use Illuminate\Support\Facades\Facade;

class Laravel6Acl extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel6-acl';
    }
}
