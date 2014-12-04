<?php
class PdoSio{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=';   		
      	private static $user='' ;    		
      	private static $mdp='' ;	
        private static $monPdo=null;
        private static $monPdoSio=null;
        
        private function __construct(){
    	PdoSio::$monPdo = new PDO(PdoSio::$serveur.';'.PdoSio::$bdd, PdoSio::$user, PdoSio::$mdp); 
		PdoSio::$monPdo->query("SET CHARACTER SET utf8");
	}
        
        public function _destruct(){
            PdoSio::$monPdo = null;
        }
        
        public  static function getPdoSio(){
            if(PdoSio::$monPdoSio==null){
                PdoSio::$monPdoSio= new PdoSio();
            }
            return PdoSio::$monPdoSio;
        }

        public function requeteAction($requete){
            $res=PdoSio::$monPdo->exec($requete);
            return $res>0;
            
        }
        public function requeteSelection($requete){
            
            $res= PdoSio::$monPdo->query($requete);

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
         * @param int $motDePasse mot de passe à crypter en md5
         */
        public function connexionUtilisateur($identifiant,$motDePasse){
            $resultats=$this->requeteSelection("select * from utilisateurs where identifiant='$identifiant' and mot_de_passe='".md5($motDePasse)."'");

            if(count($resultats)>0){
                
                return $resultats[0];
            }else
                return false;
            }
}

