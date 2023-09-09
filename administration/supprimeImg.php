<?php
/* $image = (string) './output.txt'; */
ini_set("display_errors", 1);
session_start(); // Avoir un acces a la super variable globale $_SESSION

if (
    !empty($_SESSION['user']) and isset ($_SESSION['user']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'] && 
    isset($_GET['image']) and !empty($_GET['image']) 
    
){
$image = (string) "../uploads/".$_GET['image'];

 // Remove
unlink($image);
/* echo json_encode($bool= true); */
echo json_encode([['operation' => true]]);

}

?>