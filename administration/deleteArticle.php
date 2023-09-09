<?php

ini_set('display_errors',1);

session_start(); // Avoir un acces a la super variable globale $_SESSION
if (
    !empty($_SESSION['user']) and isset($_SESSION['user']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'] 
){

    require_once('../functions/replaceOrSanitize.php');
    require_once('../classes/Database.php');
    $connexionBdd = new Database();

    if( isset($_POST['deleteArticle']) and !empty($_POST['deleteArticle'])){

        $deleteArticle =  replaceOrSanitize($_POST['deleteArticle'], 3, 'N/A');

        $connexionBdd->getData('DELETE FROM `produits` WHERE `produits`.`id` = (:deleteproduit)',[':deleteproduit'=>$deleteArticle]);

        http_response_code(302);
        header('LOCATION: ./index.php');
        exit();


    }

    


}

else {

    http_response_code(302);
    header('LOCATION: ../');
    exit();


}




?>