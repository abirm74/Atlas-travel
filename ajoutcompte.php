<?php

   include '../entities/compte.php';
   include '../core/compteC.php';
/*
    if (isset($_POST['nouv_produits']) && isset($_POST['type']) && isset($_POST['durée']) && isset($_POST['titre'])   )

   	{if (!empty($_POST['nouv_produits'])&& !empty($_POST['type'])&& !empty($_POST['durée']) && !empty($_POST['titre']) ) 

   {
   	$nouv_produits= $_POST['nouv_produits'];
   	$type= $_POST['type'];
   	$durée= $_POST['durée'];
      $titre= $_POST['titre'];

   $compte1=new compte($nouv_produits,$type,$durée,$titre);
   $compte1C=new compteC();
   $test=$compte1C->ajoutercompte($compte1);
   if($test==true)
   	echo "ajout avec success";
   else
   	echo "Echec";
}
} 
*/
if (isset($_POST['num_compte']) and isset($_POST['id_utilisateur']) and isset($_POST['mdp']) and isset($_POST['solde']) ){
$compte1=new compte($_POST['num_compte'],$_POST['id_utilisateur'],$_POST['mdp'],$_POST['solde']);
$compte1C=new compteC();
$compte1C->ajoutercompte($compte1);
   echo "<script>alert(\" ajout avec success\")</script>";
header('Location: affichercompte.php');

}else{
   echo "vérifier les champs"; 
} 
?>


