<?php

class ouvrage extends media
{
    private $_ville,
        $_collection;

    public function __construct(array $donnee)
    {
	    $this->hudrate($donnee);
    }

    public function ville() {	return $this->_ville;	}
    public function collection() {	return $this->_collection;	}

    public setVille($ville)
        {
		if (preg_match( '#^[a-zA-Zà-ÿÀ-Ŷ-]+$#', $ville))
		{
			$this->_ville = $ville;
		}
		else 
		{
			die('Erreur de déclaration de la ville');
		}
        }

    public setCollection($collection)
        {
		if (preg_match('#^[a-zA-Zà-ÿÀ-Ŷ,.;:!\' -]+$#', $collection))
		{
			$this->_collection = $collection;
		}
		else
		{
			die('Erreur de déclaration de la collection');
		}
        }
}
