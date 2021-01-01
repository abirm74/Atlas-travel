<?PHP
include "../config.php";
class factureC {
/*function affichercommande ($commande){
		echo "ref_commande: ".$commande->getref_commande()."<br>";
		echo "cin: ".$commande->getcin()."<br>";
		echo "id_panier: ".$commande->getid_panier()."<br>";
		echo "date_limite: ".$commande->getdate_limite()."<br>";
		echo "prix_livraison: ".$commande->getprix_livraison()."<br>";
	}*/

	function ajouterfacture($facture){
	$sql="insert into facture (id_facture,id_reservation,date_facture,prixtotal) values (:n,:r,:d,:p)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_facture=$facture->getid_facture();
        $id_reservation=$facture->getid_reservation();
        $date_facture=$facture->getdate_facture();
        $prixtotal=$facture->getprixtotal();
		$req->bindValue(':n',$id_facture);
		$req->bindValue(':r',$id_reservation);
		$req->bindValue(':d',$date_facture);
		$req->bindValue(':p',$prixtotal);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherfacture(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From facture";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfacture($id_facture){
		$sql="DELETE FROM facture where id_facture= :id_facture";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_facture',$id_facture);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierfacture($facture,$id_facture){
		$sql="UPDATE facture SET id_facture=:id_facture, id_reservation=:id_reservation, date_facture=:date_facture, prixtotal=:prixtotal WHERE id_facture=:id_facture";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_facture=$facture->getid_facture();
        $id_reservation=$facture->getid_reservation();
        $date_facture=$facture->getdate_facture();
        $prixtotal=$facture->prixtotal();
		$datas = array(':id_reservation'=>$id_reservation, ':cin'=>$cin, ':idpanier'=>$idpanier,':datelimite'=>$datelimite,':prixlivraison'=>$prixlivraison);
		$req->bindValue(':id_facture',$id_facture);
		$req->bindValue(':id_reservation',$id_reservation);
		$req->bindValue(':date_facture',$date_facture);
		$req->bindValue(':prixtotal',$prixtotal);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function afficher($id_facture){
		$sql="SELECT * from facture where id_facture=$id_facture";
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