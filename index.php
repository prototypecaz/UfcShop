<?php

// controller pour le front-office


error_reporting(E_ALL);

require_once('./engine/smarty/libs/Smarty.class.php');
require_once('./classes/Database.php' );

$smarty = (object) new Smarty();
$smarty->debugging = (bool) false;
$smarty->caching = (bool) false;
$smarty->cache_lifetime = (int) 120;

$smarty->force_compile = (bool) true;

$smarty->setCacheDir('./engine/caches/');
$smarty->setTemplateDir('./engine/templates/front-office/');
$smarty->setCompileDir('./engine/templates_c/');


$smarty->assign('liens', array(
    'icon' => "./asset/img/test4.png",
    'links' => array(
        array('href' => "./", 'title' => "Accueil", 'text' => "Accueil"),
        array('href' => "./?produit", 'title' => "Produit", 'text' => "Produit"),
        array('href' => "./?panier", 'title' => "Panier", 'text' => "Panier")
     
    ),
    'admin' => array('href' => "./?administration", 'title' => "Admin", 'text' => "Administration")

));

// Recupere depuis l'URL la page selectionne
$smarty->assign('page', $_SERVER['QUERY_STRING']);


$connexionBdd = new Database();

$marques = $connexionBdd->getData('SELECT * FROM `marques`',[]);
$smarty->assign('marques',$marques);

$smarty->assign('allProducts',$connexionBdd->getData('SELECT * FROM `produits`, marques WHERE id_marque = marques.id ',[]));

$categories = $connexionBdd->getData('SELECT * FROM `categories`',[]);
$smarty->assign('categories',$categories);

$smarty->assign('titreFooter',$connexionBdd->getData('SELECT `titre`,`footer`FROM `general`',[]));


$products = $connexionBdd->getData('SELECT `id`,`titre`, `description`, `image`  FROM `produits`  ORDER BY id DESC LIMIT 2 ',[]);


if(isset($_GET['article']) && !empty($_GET['article'])) {
    $products = $connexionBdd->getData("SELECT * FROM `produits`, marques  WHERE produits.id = (:idproduit) AND id_marque = marques.id  ", [":idproduit"=>$_GET['article']]);
    
    
}

if (isset($_GET["categorie"]) && !empty($_GET["categorie"])) {
    $products = $connexionBdd->getData("SELECT `id`,CONCAT(SUBSTRING_INDEX(`titre`, ' ', 3), '...') AS `titre`, CONCAT(SUBSTRING_INDEX(`description`, ' ', 10), '...') AS `description`, `image`,`prix` FROM `produits`  WHERE `id_categorie`=(:id_categorie) ", [":id_categorie"=>$_GET['categorie']]);
    
}

if (isset($_GET["marques"]) && !empty($_GET["marques"])) {
    $products = $connexionBdd->getData("SELECT `id`,CONCAT(SUBSTRING_INDEX(`titre`, ' ', 3), '...') AS `titre`, CONCAT(SUBSTRING_INDEX(`description`, ' ', 10), '...') AS `description`, `image`,`prix` FROM `produits`  WHERE `id_marque`=(:id_marque) ", [":id_marque"=>$_GET['marques']]);
   
}

if (isset($_GET["vendu"]) && !empty($_GET["vendu"])) {
    $products = $connexionBdd->getData("SELECT * FROM `produits`  WHERE `produits`.`id`=(:detail) ", [":detail"=>$_GET['vendu']]);
   
}

$productsVendus = $connexionBdd->getData("SELECT `produits`.id,CONCAT(SUBSTRING_INDEX(`titre`, ' ', 4), '...') AS `titre`, CONCAT(SUBSTRING_INDEX(`description`, ' ', 10), '...') AS `description`, `image`,`prix`,`marque` FROM `produits`,`marques` WHERE produits.id_marque = marques.id ORDER BY `vendu` DESC LIMIT 3",[]);




$smarty->assign('produits',$products);

$smarty->assign('produitVendus',$productsVendus);



$smarty->display('index.master.tpl');


?>
