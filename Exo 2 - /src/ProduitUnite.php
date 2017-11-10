<?php 

require_once('Produit.php');

class produitUnite extends Produit
{
	protected $prixUnite;

	public function __construct($t,$n,$pu)
	{
		echo"Construction d'un produit à l'unité";
		$this->prixUnite = $pu;
		parent::__construct($t,$n);
	}

	public function prixProduit ($nombre) 
	{
		return $nombre*$this->prixUnite;
	}

	public function __toString(){
 		$text = "<hr> Produit à l'unité ".
 				"<br> (type,nom): (".$this->type.','.$this->nom.')';		
 		return $text;
 	}

}

?>