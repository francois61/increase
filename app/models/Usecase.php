<?php

class Usecase extends \Phalcon\Mvc\Model
{

    public $code;
    public $nom;
    public $poids;
    public $avancement;
    public $idProjet;
    public $idDev;

    
    public function columnMap()
    {
        return array(
            'code' => 'code', 
            'nom' => 'nom', 
            'poids' => 'poids', 
            'avancement' => 'avancement', 
            'idProjet' => 'idProjet', 
            'idDev' => 'idDev'
        );
    }
	
    
}
