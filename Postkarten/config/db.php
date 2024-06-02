<?php

$optionen = [
    PDO:: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC

];

try{
    $db = new PDO ('mysql:host=localhost;dbname=postkarten','root','',$optionen);
}catch(PDOException $error){
    echo 'Die Datenverbindung ist fehlgeschlagen';
    die();
}
$db->query('SET NAMES utf8');