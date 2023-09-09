<?php


ini_set('display_errors',1);

session_start(); // Avoir un acces a la super variable globale $_SESSION
if (
    !empty($_SESSION['user']) and isset($_SESSION['user']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'] and
    isset($_GET['id']) and !empty($_GET['id'])
){
 // Permet de recuperer la function replaceorsanitize
 require_once('../functions/replaceOrSanitize.php');
 require_once('../classes/Database.php');
 $connexionBdd = new Database();
 $requete = $connexionBdd->getData('SELECT * FROM `produits` WHERE `produits`.`id` = (:idproduit)',[':idproduit'=>$_GET['id']]);
 echo json_encode($requete);

}





?>