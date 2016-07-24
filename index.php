<?php

use App\Models\HasEmail;
use App\Models\User;

require __DIR__ . '/autoload.php';




$users = User::findAll();

/**
 * @param \App\Model\HasEmail $user
 * @param string $message
 */
function sendEmail(HasEmail $user, string $message)
{
    echo 'Почта уходит на ' . $user->email;
}

sendEmail($users[1], 'Hello!');
















// $news = \App\Models\News::findAll();


// require __DIR__ . '/app/templates/index.php';

// $users = \App\Models\User::findById([':id' == 1]);

//var_dump($users);

