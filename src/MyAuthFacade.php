<?php
/**
 * Created by PhpStorm.
 * User: Alireza Rahmani
 * Date: 3/10/15
 * Time: 4:25 PM
 * Proudly Presented By: Perfect-soft.ir
 */

namespace Alireza\Authentication;
use Illuminate\Support\Facades\Facade;
class MyAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MyAuth';
    }
}