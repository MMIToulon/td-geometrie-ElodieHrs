<?php 

require_once('Robot.php');

 class Drone extends Robot
{	

	
	public function __construct($name, $vrmlFile) 
	{
		echo"Calcul de déplacement sur s secondes<br>";
		parent::__construct($x, $y, $z, $vx, $vz, $vrmlFile) 
	}



	public function decoller (){

	}

	public function atterir (){

	}


	public function setPosition ($x, $y, $z) 
	{
		return $this->$x,$this->$y,$this->$z;
	}


	public function setVitesse ($vx, $vy, $vz) 
	{
		return $this->$vx,$this->$vy,$this->$vz;
	}


	public function move ($s) 
	{
		return $this->$s
	}

	// Creation de la methode __toString()
 	// pour pouvoir utiliser echo
 	public function __toString(){
		return "<br><br>Position : (".$this->x.",".$this->y.",".$this->z.")".
			   "<br>Vitesse: (".$this->vx.",".$this->vy.",".$this->vz.")";
 	}

 	public function deplacementDrone(){
		return floor($this->x+$this->vx*s,
					 $this->y+$this->vy*s,
					 $this->z+$this->vz*s );
	}


}
?>