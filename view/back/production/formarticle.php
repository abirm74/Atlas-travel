
<?php
include "../../model/Post.php";
include "../../controller/PostC.php";


if (isset($_POST['added_on']) and isset($_POST['title']) and isset($_POST['description']) and isset($_POST['image'])){
echo 'here i am';



$a1=new Post($_POST['added_on'],$_POST['title'],$_POST['description'],$_POST['image']);

echo 'here i am 1';

$a1C=new PostC();
$a1C->ajouterPost($a1);
    header('Location: Allposts.php.php');

}else{
echo "vérifier les champs";
}

?>