<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS
	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/ProduitUnite.php");


	// INSTANCIATION d'un objet du type
	// ProduitKilo, une instance de la classe
	// ProduitKilo. "New" appelle la methode
	// construct

	$produitUnite1 = new ProduitUnite (légume,igname,3);
 
 	var_dump($produitUnite1);

	echo $produitUnite1;

	//echo "<br> Prix: ".$produitUnite1->prixProduit(); 

	$p = $produitUnite1->prixProduit(5);
	echo "<br><br> le prix du produit est".$p;  
        

?>