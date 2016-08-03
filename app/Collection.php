<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 03.08.2016
 * Time: 9:24
 */

namespace App {


    class Collection
        implements \ArrayAccess, \Iterator

    {
        use TCollection;
    }
}
