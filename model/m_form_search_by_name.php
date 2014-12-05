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
			idPerson
			FROM Persons 
			WHERE firstNamePerson =\"".$firstname."\"
			OR lastNamePerson = \"".$name."\";";

			$resultats = $pdo->selectRequest($sql);
			if ($resultats) {
				foreach ($resultats as $value){
					$ret[] = $value['idPerson'];
				}
			} 
		//requete pour recupérerles personnes en fct des noms et prenoms
			
			return $ret;
		}
		
	}

?>