<?php
require __DIR__ . '/Twig/vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
echo $twig->render('welcome.twig');
?>