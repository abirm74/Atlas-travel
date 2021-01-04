<?php
include "../../model/post.php";
include "../../controller/postC.php";
if (isset($_GET['title']))
{
    echo"verifier";
    $valeur=$_GET['title'];

    $pe = new postC();
    $pe->supprimer_a($valeur);
    header('Location: Allposts.php');
}
else
echo "verifier champ!!";
?>