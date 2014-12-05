<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'askConnection';
}
$action = $_REQUEST['action'];
switch($action){
    case 'connectionOk':{
                include_once 'include/fct.inc.php';
        
                if (!isConnect() && isset($_POST['email']) && isset($_POST['password']) ){
                    $pdo=  PdoSio::getPdoSio();
                    $resultats=$pdo->userConnection($_POST['email'],$_POST['password']);
                    if($resultats){
                        $email=$resultats['email'];
                        $id=$resultats['idAdmin'];
                        connecter($email, $id);
                    }
                    
                    
                    header('Location:../index.php?uc=home');
                }else
                    include('');

                break;
        }
        case 'disconnection':{
            include_once 'include/fct.inc.php';
            deconnecter();
            header('Location:../index.php?uc=home');
            break;
        }
        case 'askConnection':{
            include_once 'include/fct.inc.php';
            header('Location:../index.php?uc=home');
            break;
        }
    default:
        break;
}
?>