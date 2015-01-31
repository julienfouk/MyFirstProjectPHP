<?php
class client
{
	//attribut
	private $ca;
	
	// getter
	public function connaitreCa()
	{
		return $this->ca;
	}
	
	//setter
	public function definirCa($valeur)
	{
		$this->ca=$valeur;
	}
	
}