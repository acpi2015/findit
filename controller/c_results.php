<?php

include('model/m_results.php');

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
		//var_dump($tab);
		//include("view/v_results.php");
		$model = new ModelResults();
		$persons= $model->results($tab[1]);
		break;
	}
}

?>