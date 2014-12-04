<?php
include('../model/m_form_search_by_name.php');
include('../view/v_form_search_by_name.php');

if(isset($_POST['submit'])){
	buttonSearchClicked($_POST['name'], $_POST['firstname']);
}

function buttonSearchClicked($name, $firstname){
	$model = new ModelFormSearchByName();
	$person = $model->searchByName($name, $firstname);
	if(count($person) >0){
		if(count($person) == 1){
			//Afficher page personne
		} else {
			//proposer les différents resultats
		}
	} else {
		//Charger page pas de resultat + proposer recherche en mode qui est-ce
	}
}

?>