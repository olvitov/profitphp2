<?php



require __DIR__ . '/autoload.php';

$user = new App\Models\User();
$user->getEmail();

$view = new App\View();

$view->title = 'Мой крутой сайт!';
$view->users = App\Models\User:: findAll();
echo $view->render(__DIR__ . '/App/templates/index.php');




// include __DIR__ . '/App/templates/index.php';


?>









