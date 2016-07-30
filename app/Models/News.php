<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 22.07.2016
 * Time: 15:08
 */

namespace App\Models;


use App\Model;

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */

class News extends Model
{
    const TABLE = 'news';

    public $id;
    public $title;
    public $text;
    public $author_id;

    /**
     * LAZY LOAD
     *
     * @param $k
     * @return null
     */
    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;

        }

    }

    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;

        }

    }
}
