<?php
ini_set("display_errors", 1);
session_start(); // Avoir un acces a la super variable globale $_SESSION



if (
    !empty($_SESSION['user']) and isset($_SESSION['user']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'] 
){
 // Permet de recuperer la function replaceorsanitize
 require_once('../functions/replaceOrSanitize.php');
 require_once('../classes/Database.php');
 $connexionBdd = new Database();
 require_once('../classes/Sanitizing.php');
 $sanitizing = new Sanitizing();

if (
    
 
    isset($_POST['creatCategorie']) and !empty($_POST['creatCategorie']) and strlen($_POST['creatCategorie']) <= 25
  
) {
    
    $creerCategorie= (string) replaceOrSanitize($_POST['creatCategorie'], 25, 'N/A');
   

   
    $connexionBdd->getData("INSERT INTO `categories` (`id`, `categorie`) VALUES (NULL,(:categorie));",
    [':categorie' => $sanitizing->sanitizeString($creerCategorie)]);
////////////////////////////////////////// Insert Article dans BDD////////////////////////////
   /* $connexionBdd->getData("UPDATE `general` SET `title` = (:UPLOADS_BDD)", [":UPLOADS_BDD"=>$UPLOADS_BDD.$image]); */

}


 // retourne au navigateur le code HTTP pour preparer une redirection
 http_response_code(302);
 // ajoute dans l'en-tete la destination
 header('Location: ./index.php');
 // arrete l'execution du PHP
 exit(); 

}

else { // si une des condition de la if et elseif est false on rentre donc dans l'instruction de la else
  
    http_response_code(302);
    // ajoute dans l'en-tete la destination
    header('Location: ../');
    // arrete l'execution du PHP
    exit(); 

}
/* isset($_POST['modifFooterTitle']) and !empty($_POST['modifFooterTitle']) and strlen($_POST['modifFooterTitle']) >= 150 */
/* $modifFooter= (string) $_POST['modifFooterTitle']; */ 
?>