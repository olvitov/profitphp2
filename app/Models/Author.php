<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 30.07.2016
 * Time: 9:19
 */

namespace App\Models;


use App\Model;

class Author
    extends Model
{
    const TABLE = 'authors';

    public $name;

}
