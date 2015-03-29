<?php

class Tache extends \Phalcon\Mvc\Model
{
    public $id;
    public $libelle;
    public $date;
    public $avancement;
    public $codeUseCase;

    
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'libelle' => 'libelle', 
            'date' => 'date', 
            'avancement' => 'avancement', 
            'codeUseCase' => 'codeUseCase'
        );
    }

}
