<?php

require_once('./classes/Database.php' );

$connexionBdd = new Database();
$modals = $connexionBdd->getData("SELECT * FROM `produits`, marques  WHERE produits.id = (:idproduit) AND id_marque = marques.id  ", [":idproduit"=>$_GET['modal']]);
echo json_encode($modals)


?>