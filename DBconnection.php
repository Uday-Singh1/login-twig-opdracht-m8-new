<?php

class DBConnection {
    private $host = 'localhost'; 
    private $gebruiker = 'root'; 
    private $wachtwoord = ''; 
    private $database = 'twig_login';

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $verbinding = new PDO($dsn, $this->gebruiker, $this->wachtwoord);
            $verbinding->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $verbinding;
        } catch (PDOException $e) {
            echo 'Databasefout: ' . $e->getMessage();
            exit();
        }
    }
}