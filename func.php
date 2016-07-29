<?php

function logic()
{
    if ($_POST['nic'] == !empty(true)) {
        $nic = $_POST['nic'];
    } else {
        echo 'Заполните поле логин';

    }
    if ($_POST['user'] == !empty(true)) {
        $user = $_POST['user'];

    } else {
        echo 'Заполните поле user';
    }

    if ($_POST['email'] == !empty(true)) {
        $email = $_POST['email'];
    } else {
        echo 'Заполните поле email';
    }

}
