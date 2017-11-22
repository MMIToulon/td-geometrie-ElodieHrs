<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS
	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Car.php");

	// INSTANCIATION d'un objet du type
	// Carre, une instance de la classe
	// Carre. "New" appelle la methode
	// construct
	$c = new Car(100,100,3);
 
 	var_dump($c);

	echo $c;

	echo "<br> Position : ".$p->setPosition();  
    echo "<br> Vitesse : ".$v->setVitesse();







