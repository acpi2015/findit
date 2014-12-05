<?php
	include '../models/class.pdoSio.inc.php';

	class ModelFormSearchByName{

		function __construct() {}

		public function searchByName($name, $firstname){
			$ret = array();
			echo("searching in database ".$name ." ". $firstname);
			$pdo = PdoSio::getPdoSio();
			$resultats = $pdo->requestSelection("SELECT * FROM Persons 
				WHERE firstNamePerson ='".$firstname."'
				AND lastNamePerson = '".$name."'");
			if ($resultats) {
				$idInput = $resultats[0]['idPerson'];
				echo "idInput";
			} else {
				echo 'personne trouvé';
			}
		//requete pour recupérerles personnes en fct des noms et prenoms
			
			return $ret;
		}
		
	}

?>