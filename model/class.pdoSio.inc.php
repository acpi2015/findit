<?php
class PdoSio{  
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=projetsbxnuit';   		
      	private static $user='nicolas' ;    		
      	private static $mdp='toto' ;	
        private static $myPdo=null;
        private static $myPdoSio=null;
        
        private function __construct(){
    	PdoSio::$myPdo = new PDO(PdoSio::$serveur.';'.PdoSio::$bdd, PdoSio::$user, PdoSio::$mdp); 
		PdoSio::$myPdo->query("SET CHARACTER SET utf8");
	}
        
        public function _destruct(){
            PdoSio::$myPdo = null;
        }
        
        public  static function getPdoSio(){
            if(PdoSio::$myPdoSio==null){
                PdoSio::$myPdoSio= new PdoSio();
            }
            return PdoSio::$myPdoSio;
        }


        /* TO USE ACTION REQUEST
        * Example:  
        * $pdo = PdoSio::getPdoSio();
        * $pdo->requestAction("DELETE FROM photo WERE id_user = $idInput");
        *
        */
        public function actionRequest($request){
            $res=PdoSio::$myPdo->exec($request);
            return $res>0;
            
        }





        /* TO USE SELECTION REQUEST
        * Example:  
        * $pdo = PdoSio::getPdoSio();
        * $resultats = $pdo->requestSelection("SELECT id_user FROM user WHERE identifiant ='toto'");
        * if ($resultats) {
        *   $idInput = $resultats[0]['id_user'];
        *   echo "idInput";
        *   }
        */


        public function selectRequest($request){
            
            $res= PdoSio::$myPdo->query($request);
            if($res==null){
             return null;   
            }else{  
                return $res->fetchall(PDO::FETCH_NAMED);
            } 
        }
        
        /**
         * Méthode connexionUtilisateur
         * @author NC 
         * @return boolean true si la connexion est ok, false sinon
         * @param string $identifiant identifiant de l'utilisateur
         * @param int $password mot de passe à crypter en md5
         */
        public function userConnection($email,$password){
            $resultats=$this->requestSelection("select * from Admin, Organization where Organization.emailOrganization ='$email' and Admin.passwordAdmin='".md5($password)."' and Admin.idOrganizationAdmin = Organization.idOrganization");

            if(count($resultats)>0){
                
                return $resultats[0];
            }else
                return false;
            }
}

