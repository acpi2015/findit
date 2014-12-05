<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){
	case 'searchByName':{
		include("view/v_search_by_name.php");
		break;
	}
	
	default :{
		include("view/v_search_by_name.php");
		break;
	}
}

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
