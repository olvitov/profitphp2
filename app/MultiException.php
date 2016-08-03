<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 03.08.2016
 * Time: 9:55
 */

namespace App;


class MultiException
        extends \Exception
        implements \ArrayAccess, \Iterator
{
    use TCollection;

}
