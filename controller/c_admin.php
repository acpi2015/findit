<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){
	case 'admin':{
		include("view/v_admin.php");
		break;
	}
	
	default :{
		include("view/v_admin.php");
		break;
	}
}

?>
