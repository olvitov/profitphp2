<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 21.07.2016
 * Time: 16:24
 */

namespace App;


abstract class Model
{
    const TABLE = '';


    public static function   findAll()
    {
        $db = Db::instance();

        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            [],
            static::class

        );
    }

    public static function findById($id) {

        $db =  Db::instance();
        return $db->query(
          'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
            [':id' => $id],
            self::class

        );

    }
}
