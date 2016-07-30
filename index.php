<?php



require __DIR__ . '/autoload.php';

$user = new App\Models\User();
$user->getEmail();

$view = new App\View();

$view->title = 'Мой крутой сайт!';
$view->users = App\Models\User:: findAll();
$view->news = App\Models\News::findAll();
echo $view->render(__DIR__ . '/App/templates/index.php');
echo $view->render(__DIR__ . '/App/templates/news.php');




require_once 'vendor/autoload.php';

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);

echo $twig->render('Hello {{ name }}!', array('name' => 'Fabien'));

?>









