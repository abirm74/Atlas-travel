<?PHP

class CommentC {
	function ajouterComment($comment){
		$sql="insert into comment  (comment,sender_name) values 
(:comment,:sender_name)";
		$db = config::getConnexion();
		try{ 
        $req=$db->prepare($sql);
        
        $sender_name=$comment->getSender_name();
        $comment=$comment->getComment();
        
      
        
      
         
        //lier variable => paramètre 
        
		
		$req->bindValue(':comment',$comment);
		$req->bindValue(':sender_name',$sender_name);
		
		
		
		
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherComments(){
		$sql="SElECT * From comment ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerComment($comment_id){
		$sql="DELETE FROM comment where comment_id= :comment_id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':comment_id',$comment_id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierComment($comment,$comment_id){
		$sql="UPDATE comment SET  comment=:comment,sender_name=:sender_name WHERE comment_id=:comment_id";
		$db = config::getConnexion();
try{

        $req=$db->prepare($sql);
        $comment_idd=$comment->getComment_id();
        
        $comment=$comment->getComment();
        $sender_name=$comment->getSender_name();
       
     

		$datas = array(':comment'=>$comment,':sender_name'=>$sender_name);
		//lier variable => paramètre
         
		
		$req->bindValue(':comment',$comment);
		$req->bindValue(':sender_name',$sender_name);
	

	
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererComment($comment_id){ 
		$sql="SELECT * from comment where comment_id=$comment_id ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;  
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherCommentsvoy($voyid){
		$sql="SElECT * From comment where voyid=$voyid";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function affichernbrcommentsvoy($voyid){
		$sql="SElECT count(*) From comment where voyid=$voyid  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function updateCommentVoyid($voyid,$comment_id){
		$sql=" UPDATE comment Set voyid=$voyid where comment_id=$comment_id";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function afficherlastcommentid(){
		$sql="SElECT * From comment ORDER BY comment_id DESC LIMIT 1 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function countcommentsvoyage($voyid){
		$sql="SElECT count(comment_id) as nc From comment where voyid=$voyid  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function countcomments(){
		$sql="SElECT count(comment_id) as nc From comment  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	
	
	
}

?>