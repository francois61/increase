<?php

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function projectsAction($id)
    {
        echo $id;
        $this->jquery->click("#btn","console.log('Jquery marche');");
        $this->jquery->compile();
    }

}

