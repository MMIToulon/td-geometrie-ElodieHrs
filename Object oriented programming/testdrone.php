<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS
	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Drone.php");

	// INSTANCIATION d'un objet du type
	// Carre, une instance de la classe
	// Carre. "New" appelle la methode
	// construct
	$d = new Drone(14,14,7,10,6,4);
 
 	var_dump($d);

	echo $d;

	echo "<br> Position : ".$p->setPosition();  
    echo "<br> Vitesse : ".$v->setVitesse();
