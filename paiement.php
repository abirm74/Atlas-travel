<?PHP
include "../core/factureC.php";
include "../entities/facture.php";



//if (isset($_POST['id_facture']) and isset($_POST['id_reservation']) and isset($_POST['date_facture']) and isset($_POST['prixtotal'])){
//	$facture1=new facture($_POST['id_facture'],$_POST['id_reservation'],$_POST['date_facture'],$_POST['prixtotal']);
$facture1=new facture(2,1,1,1);
	$facture1x=new factureC();
	$facture1x->ajouterfacture($facture1);?>
   <html>
<head>
</head>
<body>
<form method="post" action="afficherfacture.php">
<input type="hidden" name="id" value="2">
</form>
</body>
</html>
<?php
	


?>