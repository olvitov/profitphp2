<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 22.07.2016
 * Time: 20:07
 */

namespace App;


abstract class Singleton
{

    protected static $instance;

    protected function __construct()
    {


    }
    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new static();

        }


        return static::$instance;
    }
}
