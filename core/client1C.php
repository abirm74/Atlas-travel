<?PHP
include "../config.php";
class client1C {
 
	
	
	function ajouterClient($client){
		$sql="insert into client (nom,email,etat,datee,adresse) values ( :nom,:email,:etat,:datee,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    
        $nom=$client->getNom();
        $email=$client->getEmail();
        $etat=$client->getEtat();
        $datee=$client->getDate();
        $adresse=$client->getAdresse();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':etat',$etat);
    	$req->bindValue(':datee',$datee);
		$req->bindValue(':adresse',$adresse);
	

	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    } 
    
    function ajouterClientF($client){
		$sql="insert into client (nom,email,datee,adresse,mdp) values ( :nom,:email,:datee,:adresse,:mdp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    
        $nom=$client->getNom();
        $email=$client->getEmail();
         
        $datee=$client->getDate();
        $adresse=$client->getAdresse();
              $mdp=$client->getMdp();   
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);

    	$req->bindValue(':datee',$datee);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':etat',$etat);
	$req->bindValue(':mdp',$mdp);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    } 
    function trier(){
		$sql="SELECT * from client order by datee desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
	function ajouterHistorique($client){
		$sql="insert into historique (nom,email,datee,adresse,etat) values ( :nom,:email,:datee,:adresse,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    
        $nom=$client->getNom();
        $email=$client->getEmail();
        $datee=$client->getDate();
        $adresse=$client->getAdresse();
         $etat=$client->getEtat();         
            
            
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
    	$req->bindValue(':datee',$datee);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':etat',$etat);

	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    } 
    
	function chercher($tarif){
		$sql="SELECT * from client where email='".$tarif."'";
		$db = config::getConnexion();
		try{ 
		$liste=$db->query($sql);
		return $liste;
		} 
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function afficher(){
		
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	} 
    function supprimer($Nom){
		$sql="DELETE FROM client where nom='".$Nom."'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$Nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function modifier($clientC,$nom){
		$sql="UPDATE client SET nom=:nomm , email=:email, etat=:etat, datee=:datee, adresse=:adresse WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       $nomm=$clientC->getNom();
        $email=$clientC->getEmail();
        $etat=$clientC->getEtat();
        $datee=$clientC->getDate();
        $adresse=$clientC->getAdresse();
    
		$datas = array(':nomm'=>$nomm, ':nom'=>$nom ,':email'=>$email, ':etat'=>$etat ,':datee'=>$datee , ':adresse'=>$adresse);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':adresse',$adresse);
	

		
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	} 
   function recuperer($Nom){
		$sql=" SELECT * from client where id='".$Nom."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
    
     function valid($Nom){
		$sql=" SELECT * from client where id='".$Nom."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
     function trieD(){
		$sql="SELECT * from client order by etat asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
    function triec(){
		$sql="SELECT * from client order by datee desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
    
    
	function recupererhistorique()
	{
   		$sql="SELECT * from historique";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }                                      
	}
		function getAllcommandeS($keywords){
		$sql="SELECT * FROM client WHERE CONCAT(`nom`,`email`,`datee`,`adresse`,`mdp`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function recuperercommandes()
	{
   		$sql="SELECT * from client";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

}

?>