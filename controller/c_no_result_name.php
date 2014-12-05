<?php

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


