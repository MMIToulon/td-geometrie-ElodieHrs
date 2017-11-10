<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS
	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/ProduitKilo.php");

	// INSTANCIATION d'un objet du type
	// ProduitKilo, une instance de la classe
	// ProduitKilo. "New" appelle la methode
	// construct
	$produitKilo1 = new ProduitKilo (fruit,pomme,4);
 
 	var_dump($produitKilo1);

	echo $produitKilo1;

	//echo "<br> Prix: ".$produitKilo1->prixProduit(); 

	$p = $produitKilo1->prixProduit(3);
	echo "<br><br> le prix du produit est".$p;  
    

?>