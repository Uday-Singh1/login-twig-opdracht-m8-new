<?php
require __DIR__ . '/Twig/vendor/autoload.php';
require_once 'DBconnection.php';


$gebruikersnaam = $_POST['gebruikersnaam'] ?? '';
$wachtwoord = $_POST['wachtwoord'] ?? '';

if ($gebruikersnaam === 'admin' && $wachtwoord === 'admin') {
   
    $dbConnection = new DBConnection();
    $verbinding = $dbConnection->connect();


    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
    echo $twig->render('user.twig', [
        'gebruikersnaam' => $gebruikersnaam,
        'afbeeldingen' => [
            'kat.jpeg',
            'locales.jpeg',
            'spider.jpeg'
        ]
    ]);
} else {

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
    echo $twig->render('login.twig', ['foutmelding' => 'Ongeldige inloggegevens']);
}
?>