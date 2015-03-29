<?php


class AuthorController extends ControllerBase
{
	
	
	public function projectsAction($idUser){
		$user = User::findFirst($idUser);
		$this->view->setVar("user",$user);
		$projet = Projet::find("idClient=".$idUser);
		$this->view->setVar("projet",$projet);
	}
	
	
	public function projectAction($idUser){
		$projet = Projet::find("idClient=".$idUser);
		$this->view->setVar("projet",$projet);
		$user = $projet->getUser();
		$this->view->setVar('user', $user);
		$projet = projet::findFirst ( "id = $id" );
		$this->view->setVar('idProjet', $id);
		$this->jquery->get("user/project/equipe/".$id,"#detailProject");
		$this->jquery->get("user/project/message/".$id, "#listeMessages");
		$bootstrap=$this->jquery->bootstrap();
		$idProjet = $projet->id;
		$usecases = Usecase::find(array("idDev = " . $idUser, "idProjet = " . $idProjet));
		
		
		
		foreach ($usecases as $key => $usecase) {
			$this->jquery->getAndBindTo("#getUseCase-" . $usecase->code, "click", "usecase/taches/" . $usecase->code, "#divUseCase-" . $usecase->code);
		}
			
			
			
		$this->view->setVar("usecases", $usecases);
		$this->jquery->compile($this->view);
	}
}
?>