<?PHP
include '../core/compteC.php';
   include '../entities/compte.php';
$compte1C=new compteC();
if (isset($_POST["id"]))
{
	$compte1C->supprimercompte($_POST["id"]);
	header('Location: affichercompte.php');
}

?>