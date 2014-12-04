<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){
	case 'showHome':{
		include("view/v_home.php");
		break;
	}
	
	default :{
		include("view/v_home.php");
		break;
	}
}

?>
