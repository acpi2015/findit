<?php
//require_once("include/fct.inc.php");
//require_once ("include/class.pdoSio.inc.php");



//$pdo = PdoSio::getPdoSio();
require_once ("./view/v_header.php");

if(!isset($_REQUEST['uc']) ){
     $_REQUEST['uc'] = 'home';
}	 
$uc = $_REQUEST['uc'];

switch($uc){
	case 'home':{  
                ob_end_flush();
                include("controller/c_home.php");
                /** =====> affichage du pied de page */
                include("view/v_footer.php") ;
                break;
	}
	case 'seach':{      
                include("controller/c_search.php");
                include("view/v_footer.php") ;
                break;
	}
               
        
    default :
        include("controller/c_home.php");
        
    
}

?>

