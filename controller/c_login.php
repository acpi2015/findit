<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){
	case 'login':{
		include("view/v_login.php");
		break;
	}
	
	default :{
		include("view/v_login.php");
		break;
	}
}

?>
