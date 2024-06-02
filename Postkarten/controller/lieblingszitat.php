<?php 
require_once dirname(__DIR__).'/config/db.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $zitat='';
    if(isset($_POST['zitat'])) $zitat=$_POST['zitat'];
    $nachrichtID = isset($_SESSION['nachrichtID']) ? $_SESSION['nachrichtID'] : null;
   


    $statement = $db->prepare('INSERT INTO `lieblingszitate`(`lieblingszitat`,`nachrichtID`)
                                VALUES (:zitat,:nachrichtId)');

                                $statement->bindValue(':zitat',$zitat);
                                $statement->bindValue(':nachrichtId',$nachrichtID);
                                $statement->execute();
                                
header('location:../?index.php');
}