<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){
	case 'addProfil':{
		include("view/v_add_profil.php");
		break;
	}
	
	default :{
		include("view/v_add_profil.php");
		break;
	}
}

?>
