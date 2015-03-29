<?php

class User extends \Phalcon\Mvc\Model
{

    public $id;
    public $mail;
    public $password;
    public $identite;
    public $role;

    
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'mail' => 'mail', 
            'password' => 'password', 
            'identite' => 'identite', 
            'role' => 'role'
        );
    }

}
