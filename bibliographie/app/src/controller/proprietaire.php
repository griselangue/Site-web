<?php

class proprietaire
{
	private $_id,
		$_nom,
		$_prenom,
		$_idMedia;

	public function __construct(array $array)
	{
		$this->hydrate($array);
	}


    // fonction d'hydratation de la class media
	public function hydrate(array $donnee)
	{
		foreach($donnee as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			if( method_exists($this, $method))
			{
				$this->$method($value);
			}
		
		}
	}



	public function id()
	{
		return $this->_id;
	}

	public function nom()
	{
		return $this->_nom;
	}

	public function prenom()
	{
		return $this->_prenom;
	}

	public function idMedia()
	{
		return $this->_idMedia;
	}

	public function setId($id)
	{
		$this->_id = $id;
	}

	public function setNom($nom)
	{
		$this->_nom= $nom;

	}

	public function setPrenom($prenom)
	{
		$this->_prenom= $prenom;
	}

	public function setIdMedia($idMedia)
	{
		$this->_idMedia = $idMedia;
	}

}
?>
