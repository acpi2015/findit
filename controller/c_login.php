<?php
include("./view/v_login.php");
if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}
$action = $_REQUEST['action'];
switch($action){
	case 'isValid':{
		$pdo = PdoSio::getPdoSio();
		$formEmail = $_POST["inputEmail"];
		$formPass = $_POST['inputPassword'];

		if($formPass || $formEmail){
		$bddEmail = $pdo->selectRequest("select loginAdmin from admin where loginAdmin ='".$formEmail."'");
		$bddPass = $pdo->selectRequest("select passwordAdmin from admin where passwordAdmin ='".$formPass."'");

		if (!$bddEmail || !$bddPass){
			echo ("compte non trouvé");

		}else{
		$bddPass = $bddPass[0]['passwordAdmin'];
		$bddEmail = $bddEmail[0]['loginAdmin'];
		}

			if($bddEmail==$formEmail && $bddPass==$formPass){
				echo "ok";

			}
		
		}else{
			echo "remplir champs";
		}
		
		break;
	}
	

}

?>
