<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 22.07.2016
 * Time: 15:08
 */

namespace App\Models;


use App\Model;

class News extends Model
{
    const TABLE = 'news';

    public $id;
    public $title;
    public $text;
    public $author_id;



}
