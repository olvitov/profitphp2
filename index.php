<?php

require __DIR__ . '/autoload.php';

$user = new \App\Models\User();
$users = $user->findAll();

var_dump($users);

