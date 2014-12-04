<?php
//require_once("include/fct.inc.php");
//require_once ("include/class.pdoSio.inc.php");



//$pdo = PdoSio::getPdoSio();
require_once ("./vues/v_header.php");

if(!isset($_REQUEST['uc']) ){
     $_REQUEST['uc'] = 'home';
}	 
$uc = $_REQUEST['uc'];

switch($uc){
	case 'home':{  
                ob_end_flush();
                include("controleurs/c_home.php");
                /** =====> affichage du pied de page */
                include("vues/v_footer.php") ;
                break;
	}
	case 'seach':{      
                include("controleurs/c_search.php");
                include("vues/v_footer.php") ;
                break;
	}
               
        
    default :
        include("controleurs/c_home.php");
        
    
}

?>

