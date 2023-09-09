<?php
ini_set("display_errors", 1);
session_start(); // Avoir un acces a la super variable globale $_SESSION
ini_set('post_max_size', '1M');
ini_set('upload_max_filesize', '1M');

$WHITE_LIST = (array) ['jpg', 'jpeg', 'gif', 'png', 'bmp'];
$UPLOADS = (string) '/var/www/html/ufcshop/uploads/';
/*$UPLOADS_BDD = (string) '/uploads/';*/

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
    
    isset($_GET['id']) and !empty($_GET['id']) and
    isset($_FILES['imageProduit']['error']) and $_FILES['imageProduit']['error'] === 0 and
    isset($_POST['titre']) and !empty($_POST['titre']) and strlen($_POST['titre']) <= 75 and
    isset($_POST['description']) and !empty($_POST['description']) and strlen($_POST['description']) <= 65535 and
    isset($_POST['categorie']) and !empty($_POST['categorie']) and strlen($_POST['categorie']) <= 2 and
    isset($_POST['marque']) and !empty($_POST['marque']) and strlen($_POST['marque']) <= 2 and
    isset($_POST['prix']) and !empty($_POST['prix']) and strlen($_POST['prix']) <= 5 and
    isset($_POST['quantite']) and !empty($_POST['quantite']) and strlen($_POST['quantite']) <= 2 and
    isset($_POST['vendu']) and !empty($_POST['vendu']) and strlen($_POST['vendu']) <= 4
) {
    
    $idProduit = (int) replaceOrSanitize($_GET['id'], 2, 'N/A');
    $titreArticle = (string) replaceOrSanitize($_POST['titre'], 75, 'N/A');
    $description = (string) replaceOrSanitize($_POST['description'], 65535, 'N/A');
    $idCategorie = (int) replaceOrSanitize($_POST['categorie'], 2, 'N/A');
    $idMarque = (int) replaceOrSanitize($_POST['marque'], 2, 'N/A');
    $prix = (float) replaceOrSanitize($_POST['prix'], 5, 'N/A');
    $quantite = (int) replaceOrSanitize($_POST['quantite'], 2, 'N/A');
    $vendu = (int) replaceOrSanitize($_POST['vendu'], 2, 'N/A');
    

    $image = (string) $_FILES['imageProduit']['name'];

	// recupere l'extension de l'image
    $extension = (string) pathinfo($image)['extension'];

    // in_array('ceQueJeCherche', ['dansQuoi']);
    if (in_array($extension, $WHITE_LIST)) {
	
	    // recupere le nom de l'image
        $name = (string) pathinfo($image)['filename'];
        
	    // genere une chaine aleatoire alphanumerique
	    $random = (string) bin2hex(random_bytes(32));
        
        // construction du nouveau nom de l'image
        $image = (string) "$name-$random.$extension";
        
        /* 
        deplace le fichier temporaire dans un autre repertoire
        l'autre repertoire doit avoir des permissions www-data
        exemple : sudo chown -R www-data:www-data /var/www/html/uploads/
        et doit avoir obligatoirement un index.php
        exemple : /var/www/html/uploads/index.php
        */

        // move_uploaded_file('source', 'destination');
        move_uploaded_file($_FILES['imageProduit']['tmp_name'], $UPLOADS . $image);

    }

    else {

        echo "Extension non autorisee.";

    }
    
    $connexionBdd->getData("UPDATE `produits` SET `titre` = (:titre),`description` = (:description),`image` = (:image),`prix` = (:prix),`quantite` = (:quantite),`id_categorie` = (:idCategorie),`id_marque` = (:idMarque), `vendu` = (:vendu) WHERE `produits`.`id` = (:idProduit)",
     [':titre' => $titreArticle,
     ':description' => $description,
     ':image' => $image,
     ':prix' => $prix,
     ':quantite' => $quantite,
     ':idCategorie' => $idCategorie,
     ':idMarque' => $idMarque,
     ':idProduit' => $idProduit,
     ':vendu' => $vendu]);

}


else {

    echo "Echec du telechargement.";

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

?>