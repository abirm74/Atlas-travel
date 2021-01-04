<?PHP
include "../../model/Post.php";
include "../../controller/postC.php";

if (isset($_POST['added_on'])){
    echo "1";
    $artC=new postC();
    echo"2";
$art=new post($_POST['added_on'], $_POST['title'], $_POST['description'], $_POST['image']);
echo"3";
$artC->modifierpost($art,$_POST['added_on']);

header('Location:Allposts.php');

}
?>
