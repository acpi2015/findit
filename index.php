<?php

require_once("model/fct.inc.php");

require_once ("model/class.pdoSio.inc.php");


session_start();
$pdo = PdoSio::getPdoSio();
require_once ("./view/v_header.php");

if(!isset($_REQUEST['uc']) ){
     $_REQUEST['uc'] = 'home';
}



$uc = $_REQUEST['uc'];

switch($uc){
	case 'home':{  
                ob_end_flush();
                include("controller/c_home.php");
                include("view/v_footer.php");
                break;
	}

    case 'searchByName':{      
                include("controller/c_search_by_name.php");
                include("view/v_footer.php");
                break;
    }  

    case 'searchByCriteria':{      
                include("controller/c_search_by_criteria.php");
                include("view/v_footer.php");
                break;
    }     

    case 'login':{
                include("controller/c_login.php");
                include("view/v_footer.php");
                break; 

    } 

    case 'noResultName':{  
                include("controller/c_no_result_name.php");
                include("view/v_footer.php");
                break;
    }

    case 'noResultCriteria':{  
                include("controller/c_no_result_criteria.php");
                include("view/v_footer.php");
                break;
    }

    case 'results':{
                include("controller/c_results.php");
                include("view/v_footer.php");
                break; 
    }

    case 'profile':{  
                include("controller/c_profile.php");
                include("view/v_footer.php");
                break;

    }

    case 'successLogin':{
                include("controller/c_admin.php");
                include("view/v_footer.php");
                break; 
    }

    default:{
                include("controller/c_home.php");
                include("view/v_footer.php");
                break; 
    }
}


?>
