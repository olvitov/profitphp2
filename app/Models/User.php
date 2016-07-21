<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 19.07.2016
 * Time: 20:33
 */

namespace App\Models;

use App\Db;
use App\Model;


class User extends Model
{
    const TABLE= 'users';

    public $email;
    public $name;


}
