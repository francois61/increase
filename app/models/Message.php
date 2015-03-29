<?php

class Message extends \Phalcon\Mvc\Model
{
    public $id;
    public $objet;
    public $content;
    public $date;
    public $idUser;
    public $idProjet;
    public $idFil;

    
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'objet' => 'objet', 
            'content' => 'content', 
            'date' => 'date', 
            'idUser' => 'idUser', 
            'idProjet' => 'idProjet', 
            'idFil' => 'idFil'
        );
    }
    
	
	
    public function getIdProjet(){
    	return $this->idProjet;
    }
	
	
	
    public function getContent(){
    	return $this->content;
    }
   
   
   
}
