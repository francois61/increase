<?php

class Projet extends \Phalcon\Mvc\Model
{
    public $id;
    public $nom;
    public $description;
    public $dateLancement;
    public $dateFinPrevue;
    public $idClient;

    
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'nom' => 'nom', 
            'description' => 'description', 
            'dateLancement' => 'dateLancement', 
            'dateFinPrevue' => 'dateFinPrevue', 
            'idClient' => 'idClient'
        );
    }

	// Auto Généré
    public function  getId(){
    	return $this->id;
    }
    public function  getNom(){
    	return $this->nom;
    }
    public function  getdescription(){
    	return $this->description;
    }
    public function  getdateL(){
    	return $this->dateLancement;
    }
    public function  getDateF(){
    	return $this->dateFinPrevue;
    }
    public function  getIdClient(){
    	return $this->idClient;
    }
    public function getUser(){
    	return $this->idClient;
    }

}
