<?php

require __DIR__ . '/autoload.php';

$s = \App\Singleton::instance();
$s->counter = 1;

$s = \App\Singleton::instance();


var_dump($s);
