<?php

	$action = $_REQUEST['action'];
	switch($action)
	{
		case 'isValide':
		{
			if(isset($_POST['back']))
			{
		 		header("Location: index.php?uc=Home");
			}
		}
	}
			
?>