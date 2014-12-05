<?php

if (!isset($_REQUEST['action'])){
    $_REQUEST['action']="afficherAccueil";
}

	$action = $_REQUEST['action'];
	switch($action)
	{
		case 'isValide':
		{
			if(isset($_POST['yes']))
			{
		 		header("Location: index.php?uc=searchByCriteria");
			}
			elseif(isset($_POST['no'])) 
			{
				header("Location: index.php?uc=home");
			}
		}
	}
			
?>


