<?php 
require_once dirname(__DIR__).'/config/db.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $vname='';
    if(isset($_POST['vn'])) $vname=$_POST['vn'];
    $nn='';
    if(isset($_POST['nn'])) $nn=$_POST['nn'];

    $mail='';
    if(isset($_POST['mail'])) $mail=$_POST['mail'];
    $adresse='';
    if(isset($_POST['adresse'])) $adresse=$_POST['adresse'];
    $nachricht='';
    if(isset($_POST['nachricht'])) $nachricht=$_POST['nachricht'];


    $statement = $db->prepare('INSERT INTO `contacts`(`vorname`,`nachname`,`email`,`adresse`,`nachricht`)
                                VALUES (:vn,:nn,:email,:adresse,:nachricht)');

                                $statement->bindValue(':vn',$vname);
                                $statement->bindValue(':nn',$nn);
                                $statement->bindValue(':email',$mail);
                                $statement->bindValue(':adresse',$adresse);
                                $statement->bindValue(':nachricht',$nachricht);
                                $statement->execute();

                                  // Die zuletzt eingefügte ID holen
        $generatedNachrichtID = $db->lastInsertId();
        $_SESSION['nachrichtID'] = $generatedNachrichtID;
                                
header('location:../?index.php');
}