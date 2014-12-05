<?php
include 'model/class.Person.php';

	class ModelResults{

		function __construct() {}

		public function results($id){
			$ret = array();
			
			$pdo = PdoSio::getPdoSio();
			
			$sql="SELECT 
			firstNamePerson, lastNamePerson, photoPerson, sexPerson, sizePerson, corpulencePerson, 
			hairColorPerson, tatooPerson,idOrganizationPerson
			FROM Persons 
			WHERE idPerson = \"".$id."\";";
			//Modifier la requette pour avoir toutes les infos
			$resultats = $pdo->selectRequest($sql);
			echo "<p style='center'><em>Prenom </em>". ($resultats[0]['firstNamePerson']);
			echo "<p style='center'><em>Nom  </em>". ($resultats[0]['lastNamePerson']);
			echo "<p>". ($resultats[0]['photoPerson']);
			echo "<p style='center'><em>Sex </em>". ($resultats[0]['sexPerson']);
			echo "<p style='center'><em>Taille </em>". ($resultats[0]['sizePerson']);
			echo "<p style='center'><em>Corpulence </em>". ($resultats[0]['corpulencePerson']);
			echo "<p style='center'><em>Couleur de cheveux </em>". ($resultats[0]['hairColorPerson']);
			echo "<p style='center'><em>Tatouage </em>". ($resultats[0]['tatooPerson']);
			echo "<p style='center'><em>Identifiant ONG </em>". ($resultats[0]['idOrganizationPerson']);
			var_dump($resultats); //<==============DEBUG
			if ($resultats) {
				foreach ($resultats as $value){
					//Instancier un objet Personne avec les infos recup dans la requette
					//Mettre les infos dans $ret[]
	
					$ret[] = $value['firstNamePerson'];
				}
			} 
		//requete pour recupérerles personnes en fct de leur id
			
			return $ret;
		}
		
	}
?>