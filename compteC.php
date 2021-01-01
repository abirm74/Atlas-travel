<?PHP
include "../config.php";
class compteC {
/*function affichercommande ($commande){
		echo "ref_commande: ".$commande->getref_commande()."<br>";
		echo "cin: ".$commande->getcin()."<br>";
		echo "id_panier: ".$commande->getid_panier()."<br>";
		echo "date_limite: ".$commande->getdate_limite()."<br>";
		echo "prix_livraison: ".$commande->getprix_livraison()."<br>";
	}*/

	function ajoutercompte($facture){
	$sql="insert into compte (num_compte,id_utilisateur,mdp,solde) values (:n,:r,:d,:p)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $num_compte=$facture->getnum_compte();
        $id_utilisateur=$facture->getid_utilisateur();
        $mdp=$facture->getmdp();
        $solde=$facture->getsolde();
		$req->bindValue(':n',$num_compte);
		$req->bindValue(':r',$id_utilisateur);
		$req->bindValue(':d',$mdp);
		$req->bindValue(':p',$solde);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercompte(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From compte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercompte($id_utilisateur){
		$sql="DELETE FROM compte where num_compte = :id_utilisateur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_utilisateur',$id_utilisateur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifiercompte($facture,$num_compte){
		$sql="UPDATE compte SET num_compte=:num_compte, id_utilisateur=:id_utilisateur, mdp=:mdp, solde=:solde WHERE num_compte=:num_compte";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$num_compte=$facture->getnum_compte();
        $id_utilisateur=$facture->getid_utilisateur();
        $mdp=$facture->getmdp();
        $solde=$facture->solde();
		$datas = array(':id_utilisateur'=>$id_utilisateur, ':cin'=>$cin, ':idpanier'=>$idpanier,':datelimite'=>$datelimite,':prixlivraison'=>$prixlivraison);
		$req->bindValue(':num_compte',$num_compte);
		$req->bindValue(':id_utilisateur',$id_utilisateur);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':solde',$solde);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function paiement($id,$prix){
		$sql="UPDATE compte SET solde=solde - :prix WHERE num_compte=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':prix',$prix);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function afficher($num_compte){
		$sql="SELECT * from compte where num_compte=$num_compte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>