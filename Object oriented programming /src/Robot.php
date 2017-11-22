<?php

  //Declaration of the class Robot
  abstract class Robot  
{
    protected  $name;
    protected $x = 0;
    protected  $y = 0;
    protected  $z = 0;
    protected  $vx = 0;
    protected  $vy = 0;
    protected  $vz + 0;
    protected $vrmlFile = 0;



 public static $compteur=0;
  //Declaration of the construct function
	public function __construct($x, $y, $z, $vx, $vz, $vrmlFile) 
	{
     	echo "Calcul de déplacement d'un robot";
		$this->name = $name;
		$this->x = $x;
    $this->y = $y;
    $this->z = $z;
    $this->vx = $vx;
    $this->vy = $vy;
    $this->vz = $vz;
    $this->vrmlFile = $vrmlFile;

    self::$compteur++;
	}

  public function __toString(){
    $ = ;
    return $;
  }
}

?>