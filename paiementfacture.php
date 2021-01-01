<?PHP
include "../core/compteC.php";
include "../entities/compte.php";


   $compte1C=new compteC();
   $mylist=$compte1C->afficher($_POST['num']);

foreach ($mylist as $row)       /*pour connaitre le nombre de lignes dans la table a afficher*/
{
$solde=	$row['solde'];
$mdp=	$row['mdp'];
$num=	$row['num_compte'];
}
if( ($num == $_POST['num']) and ($mdp == $_POST['mdp']))
{
	if(isset($_POST['prix']))


{
	if($solde>$_POST['prix']){


			$compte1x=new compteC();
	$compte1x->paiement($_POST['num'],$_POST['prix']);
	echo "<script>alert(\" ajout avec success\")</script>";

	}
else echo "<script>alert(\" solde insuffisant\")</script>";
}


	
}else echo "<script>alert(\" mdp incorrect\")</script>";



?>