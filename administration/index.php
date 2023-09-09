<?php
// Controller pour le back-office

include_once('../securityHeader.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('../classes/Database.php' );
require_once('../engine/smarty/libs/Smarty.class.php');
$smarty = (object) new Smarty();
$smarty->debugging = (bool) false;
$smarty->caching = (bool) false;
$smarty->cache_lifetime = (int) 120;
$smarty->force_compile = (bool) true;

$smarty->setCacheDir('../engine/caches/');
$smarty->setTemplateDir('../engine/templates/back-office/');
$smarty->setCompileDir('../engine/templates_c/');
$smarty->assign("logged", false);
// Recupere depuis l'URL la page selectionne
$smarty->assign('page', $_SERVER['QUERY_STRING']);
session_start();
$connexionbdd = new Database();
$categorie = $connexionbdd->getData('SELECT * FROM categories',[]);
$marques = $connexionbdd->getData('SELECT * FROM marques', []);

if (!isset($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
// assign
if(
    isset($_SESSION['user']) && !empty($_SESSION['user']) &&
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'] 
   // $_SESSION['csrf'] === $_POST['token_csrf']
){
$smarty->assign("logged", true);
}

$deleteArticle = $connexionbdd->getData('SELECT * FROM produits',[]);
$smarty->assign('deleteArticles',$deleteArticle);
$smarty->assign('csrf', $_SESSION['csrf']);
$smarty->assign("categories", $categorie);

$smarty->assign("marques", $marques);

$smarty->display('index.master.tpl');
?>