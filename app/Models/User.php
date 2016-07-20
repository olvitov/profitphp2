<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 19.07.2016
 * Time: 20:33
 */

namespace App\Models;

use App\Db;


class User
{
    public $email;
    public $name;

    public function  findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM users',
            'App\Models\User'

        );
    }
}
