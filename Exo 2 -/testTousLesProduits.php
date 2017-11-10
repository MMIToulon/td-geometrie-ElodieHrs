<?php

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/ProduitUnite.php");
	require_once("src/ProduitKilo.php");
	

	// instanciation

	$produitKilo = new ProduitKilo (fruit,pomme,3);
 	echo "<br>".Produit::$compteur;
	echo "<br>".$produitKilo;


	$produitUnite = new ProduitUnite (légume,pomme de terre,0.89);
 	echo "<br>".Produit::$compteur;
	echo "<br>".$produitUnite;

?>