<?php
if (!isset($_REQUEST['action'])){
$_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){

	default :{
		$tab[]= array();
		foreach($_SESSION['ids'] as $value){
			$tab[] = $value;
		}
		var_dump($tab);
		include("view/v_results.php");
		break;
	}
}

?>