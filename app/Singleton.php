<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 22.07.2016
 * Time: 20:07
 */

namespace App;


class Singleton
{
    public $counter;
    protected static $instance;

    protected function __construct()
    {


    }
    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();

        }


        return self::$instance;
    }
}
