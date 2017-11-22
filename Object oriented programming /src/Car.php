<?php 
//Declaration of the girl class of robot
require_once('Robot.php');
class Car extends Robot
{
	public function __construct($name, $vrmlFile) 
	{
		echo"Calcul de déplacement sur s secondes<br>";
		parent::__construct($x, $y, $z, $vx, $vz, $vrmlFile) 
	}

	public function setPosition ($x, $y) 
	{
		return $this->$x,$this->$y;
	}


	public function setVitesse ($vx, $vy) 
	{
		return $this->$vx,$this->$vy;
	}


	public function move ($s) 
	{
		return $this->$s
	}

	// Creation de la methode __toString()
 	// pour pouvoir utiliser echo
 	public function __toString(){
		return "<br><br>Position : (".$this->x.",".$this->y.")".
			   "<br>Vitesse: (".$this->x.",".$this->y.")";
 	}

 	public function deplacementCar(){
		return floor($this->x+$this->vx*s,
					 $this->y+$this->vy*s );
	}


}
?>