<?php

namespace App\Controllers;

use App\View;

class user
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function actionIndex()
    {


        $this->view->title = 'Новости!';
        $this->view->news = \App\Models\User::findAll();
        $this->view->display(__DIR__ . '/../templates/user.php');
    }
}
