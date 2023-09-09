<?php
ini_set("display_errors", 1);
session_start(); // Avoir un acces a la super variable globale $_SESSION
if (
    !empty($_SESSION['user']) and isset ($_SESSION['user']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'] 
){
 // Permet de recuperer la function replaceorsanitize
 require_once('../functions/replaceOrSanitize.php');
 require_once('../classes/Database.php');
 $connexionBdd = new Database();

if (
    $_GET['modify'] === 'title' and

    isset($_POST['modifTitre']) and !empty($_POST['modifTitre']) and strlen($_POST['modifTitre']) <= 25 and
    $_POST['token_csrf'] === $_SESSION['csrf']
    
) {
   
    $modifTitre = (string) replaceOrSanitize($_POST['modifTitre'], 25, 'N/A');
   

   

   $connexionBdd->getData("UPDATE `general` SET `title` = (:modifTitre)", [":modifTitre"=>$modifTitre]);

}

elseif (
    $_GET['modify'] === 'footer' and

   

    isset($_POST['modifFooterTitle']) and !empty($_POST['modifFooterTitle']) and strlen($_POST['modifFooterTitle']) <= 150
    
) {
   
    $modifFooterTitle = (string) replaceOrSanitize($_POST['modifFooterTitle'], 150, 'N/A');

   $connexionBdd->getData("UPDATE `general` SET `footer` = (:modifFooterTitle)", [":modifFooterTitle"=>$modifFooterTitle]);

  
}

 // retourne au navigateur le code HTTP pour preparer une redirection
 http_response_code(302);
 // ajoute dans l'en-tete la destination
 header('Location: ./index.php');
 // arrete l'execution du PHP
 exit();

}

else { // si une des condition de la if et elseif est false on rentre donc dans l'instruction de la else
    // retourne au navigateur le code HTTP pour preparer une redirection
    http_response_code(302);
    // ajoute dans l'en-tete la destination
    header('Location: ../');
    // arrete l'execution du PHP
    exit();

}
/* isset($_POST['modifFooterTitle']) and !empty($_POST['modifFooterTitle']) and strlen($_POST['modifFooterTitle']) >= 150 */
/* $modifFooter= (string) $_POST['modifFooterTitle']; */ 
?>