<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 21.07.2016
 * Time: 16:24
 */

namespace App;


class Model
{
    const TABLE = '';


    public static function   findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE, // раннее статическое с
            static::class

        );
    }
}
