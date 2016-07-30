<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 19.07.2016
 * Time: 20:33
 */

namespace App\Models;


use App\Model;


class User extends Model
    implements HasEmail
{
    const TABLE= 'users';

    public $id;
    public $email;
    public $name;

    /**
     * @deprecated
     * @return string
     */

public function getEmail()
{
    return $this->email;
}
}
