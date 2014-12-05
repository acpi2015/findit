<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}

$action = $_REQUEST['action'];
switch($action){
	case 'searchByCriteria':{
		include("view/v_search_by_criteria.php");
		break;
	}
	
	default :{
		include("view/v_search_by_criteria.php");
		break;
	}
}

?>