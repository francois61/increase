<?php



class UserController extends ControllerBase
{

	public function userAction(){}
	
	public function projectsAction($idUser){
		$user = User::findFirst($idUser);
		$this->view->setVar("user",$user);
		$projet = Projet::find("idClient=".$idUser);
		$this->view->setVar("projet",$projet);
	}
	
	
	public function projectAction($id){
		$projet = Projet::findFirst($id);
		$this->view->setVar('projet', $projet);
		$user = $projet->getUser();
		$this->view->setVar('user', $user);
		$projet = projet::findFirst ( "id = $id" );
		$this->view->setVar('idProjet', $id);
		$this->jquery->get("user/project/equipe/".$id,"#detailProject");
		$this->jquery->get("user/project/message/".$id, "#listeMessages");
		$bootstrap=$this->jquery->bootstrap();
		$messages = Message::find(array("idMessage" => $id));
		
		
		foreach ($messages as $message) {
			$this->jquery->getAndBindTo("#btnMessage", "click", "toggle","#listeMessages");
		}
		$this->view->setVar("messages", $messages);
		$this->jquery->compile($this->view);
	}
}

?>