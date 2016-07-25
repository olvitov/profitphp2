<?php

use App\Models\HasEmail;
use App\Models\User;

require __DIR__ . '/autoload.php';




$users = new User();
$users->insert();
$users->nic = 'vas';
$users->name = 'Vasya';
$users->email = 'v@pupkin.ru';
$users->insert();
















// $news = \App\Models\News::findAll();


// require __DIR__ . '/app/templates/index.php';

// $users = \App\Models\User::findById([':id' == 1]);

//var_dump($users);

