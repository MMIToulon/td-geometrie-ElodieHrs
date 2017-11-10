<?php

abstract class Produit  
{
    protected  $type;
    protected  $nom;

    public abstract function prixProduit ($name);
    public static $compteur=0;

	public function __construct($t, $n) 
	{
     	echo "Construction d'un produit";
		$this->type = $t;
		$this->nom = $n;

      	self::$compteur++;
	}
}

?>