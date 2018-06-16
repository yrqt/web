<?php 
require '_header.php';

if(isset($_GET['id'])){
	$product = $DB->query('SELECT * FROM products WHERE id = :id', array('id' => $_GET['id']));
	if(empty($product)){
		die("Ce produit n'existe pas");
	}
	$panier->add($product[0]->ID);
	die('Le produit à bien été ajouté à votre panier. <a href="javascript:history.back()">Retourner sur la catalogue.</a>');
}
else{
	die("Vous n'avez pas sélectionné de produit à ajouter au panier");
}


?>
