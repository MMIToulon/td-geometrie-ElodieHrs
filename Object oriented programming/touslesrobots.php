<?php

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Robot.php");
	require_once("src/Car.php");
	require_once("src/Drone.php");

	// instanciation
	$car = new Car(2,3,4,5);
	echo "<br>".Robot::$compteur;
	echo "<br>".$car
 	$drone = new Drone(4,5,6,7,3,2);
 	echo "<br>".Robot::$compteur;
 	echo "<br>".$drone;



?>