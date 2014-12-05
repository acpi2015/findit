<?php
	
	include 'model/class.Person.php';

	class ModelFormSearchByName{

		function __construct() {}

		public function searchByName($name, $firstname){
			$ret = array();
			//=======DEBUG
			echo("searching in database ".$name ." ". $firstname);
			$pdo = PdoSio::getPdoSio();
			
			$sql="SELECT 
			firstNamePerson, 
			lastNamePerson, 
			photoPerson, 
			sexPerson,
			sizePerson, 
			corpulencePerson, 
			hairColorPerson, 
			tatooPerson, 
			idOrganizationPerson
			FROM Persons 
			WHERE firstNamePerson =\"".$firstname."\"
			OR lastNamePerson = \"".$name."\";";

			$resultats = $pdo->selectRequest($sql);
			if ($resultats) {
				foreach ($resultats as $value){
					$toInsert = new Person($value['firstNamePerson'],$value['lastNamePerson'],$value['photoPerson'],
						$value['sexPerson'],$value['sizePerson'],$value['corpulencePerson'],$value['hairColorPerson'],
						$value['tatooPerson'],$value['idOrganizationPerson']);
					$ret[] = $toInsert;
				}
			} 
		//requete pour recupérerles personnes en fct des noms et prenoms
			
			return $ret;
		}
		
	}

?>