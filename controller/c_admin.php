<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){
	case 'addPerson':{
		include("view/v_add_profil.php");
		break;
	}
	
	case 'sendForm':{
		include("view/v_in_form.php");
		break;
	}
	case 'logout':{
		session_destroy();
		include("view/v_home.php");
		break;
	}
	default :{
		include("view/v_admin.php");
		break;
	}
}

?>
