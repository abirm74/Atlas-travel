<?PHP
include"../config.php";

//include_once "../model/Post.php"
class postC {
    protected $db;

    function afficherpost ($a){

        echo "post_id: ".$a->getpost_id()."<br>";
        echo "cat_id: ".$a->getcat_id()."<br>";
        echo "title: ".$a->gettitle()."<br>";
        echo "description: ".$a->getdescription()."<br>";
        echo "added_on: ".$a->getadded_on()."<br>";
        echo "added_by: ".$a->getadded_by()."<br>";
        echo "image: ".$a->image()."<br>";
      
    }
    public function recupererpost($added_on){

        $conn = NULL;
        try{
            echo"1111";
            $conn = new PDO("mysql:host=localhost;dbname=posts", "root", " ");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $sql="SELECT * FROM posts where added_on=$added_on";
        $this->db = $conn;
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ajouterpost ($a){



        $sql="insert into post (post_id,cat_id,title,description , added_on , added_by , image) values 
(:post_id, :cat_id, :title, :description , :added_on , :added_by , :image)";
        $conn = NULL;
        try{
            echo"1111";
            $conn = new PDO("mysql:host=localhost;dbname=posts",
                "root", " ");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        try{

            $req=$this->db->prepare($sql);
            $post_id=$a->getpost_id();
            $cat_id=$a->getcat_id();
            $title=$a->gettitle();
            $description=$a->getdescription();
    
            //lier variable => paramètre
            $req->bindValue(':post_id',$post_id);
            $req->bindValue(':cat_id',$cat_id);
            $req->bindValue(':title',$title);
            $req->bindValue(':description',$description);
            $req->bindValue(':added_on',$added_on);
            $req->bindValue(':added_by',$added_by);
            $req->bindValue(':image',$image);  
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function modifierpost($e,$post_id){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=posts", "root", " ");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }

        $this->db = $conn;
        


        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
           

            
            $post_id=$e->getpost_id();
            $cat_id=$e->getcat_id();
            $title=$e->gettitle();
            $description=$e->getdescription();
            $added_on=$e->getadded_on();
            $added_by=$e->getadded_by();
            $image=$e->getimage();
                $sql="UPDATE post SET post_id='$post_id', cat_id='$cat_id', title='$title', description='$description' , added_on='$added_on' , cat_id='$added_by' , image='$image'WHERE post_id='$post_id'";
                     $req = $this->db->prepare($sql);
            $datas =array(':post_id'=>$post_id, ':cat_id'=>$cat_id,':title'=>$title,':description'=>$description , ':added_on'=>$added_on , ':added_by'=>$added_by , ':image'=>$imagee);
            
            $req->bindValue(':post_id',$post_id);
            $req->bindValue(':cat_id',$cat_id);
            $req->bindValue(':title',$title);
            $req->bindValue(':description',$description);
            $req->bindValue(':added_on',$added_on);
            $req->bindValue(':added_by',$added_by);
            $req->bindValue(':inage',$image);

            $req->execute();


        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
            echo " Les data : " ;
            print_r($datas);
        }

    }


    function affiche_a(){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=posts", "root", " ");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql="SElECT * FROM posts";
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    public function supprimer_a($title)
    {
        echo"2222";
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=posts", "root", " ");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo"33333";
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql = "DELETE  FROM `posts` WHERE `title`=:title";
        $req= $this->db->prepare($sql);
        $req->bindValue(':title',$title);
        $req->execute();

    }
        function tridate(){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=posts", "root", " ");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql= "SELECT * FROM posts ORDER BY added_on ";
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>