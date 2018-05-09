<?php
/*   EXERCICE 4 LUDWIG*/

class Chat
{

    private $prenom;

    private $age;

    private $couleur;

    private $sexe;

    private $race;

	public function __construct($prenom, $age, $couleur, $sexe, $race)
	{
		$this->prenom = $prenom;
		$this->age = $age;
		$this->couleur = $couleur;
		$this->sexe = $sexe;
		$this->race = $race;

	}
/*--------------------------------------------------------------*/

	public function getPrenom(){
		return $this->prenom;
	}


	public function getAge(){
		return $this->age;
	}


	public function getCouleur(){
		return $this->couleur;
	}


	public function getSexe(){
		return $this->sexe;
	}


	public function getRace(){
		return $this->race;
	}


	public function getInfos(){

		 $infos = array(
			"le nom du chat est ".$this->getPrenom().'.',
			"son age : ".$this->getAge().'.',
			"sa couleur est :".$this->getCouleur().'.',
			"son sexe est ".$this->getSexe().'.',
			"la race est ".$this->getRace().'.<br>'
		);
		return $infos;
	}

}

?>

