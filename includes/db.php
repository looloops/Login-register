<?php

$host = "localhost";
$db = "gestione_libreria";
$user = "root";
$pass = "";


$dsn = "mysql:host=$host;dbname=$db";

$options = [

    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,

];

// comando che connette al databse
$pdo = new PDO($dsn, $user, $pass, $options);


// connessione al database users