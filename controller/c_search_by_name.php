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

?>
