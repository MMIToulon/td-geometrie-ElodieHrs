<?php 

require_once('Produit.php');

 class produitKilo extends Produit
{	
	protected $prixKilo;

	
	public function __construct($t,$n,$pk)
	{
		echo"Construction d'un produit au Kilo <br>";
		$this->prixKilo = $pk;
		parent::__construct($t,$n);
	}

	public function prixProduit ($poids) 
	{
		return $poids*$this->prixKilo;
	}

	// Creation de la methode __toString()
 	// pour pouvoir utiliser echo
 	public function __toString(){
 		$text = "<hr> Produit au Kilo ".
 				"<br> (type,nom): (".$this->type.','.$this->nom.')';		
 		return $text;
 	}
}
?>