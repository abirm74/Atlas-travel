




<?PHP
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$codepromo=$_POST['codepromo'];
$mysqli = new mysqli("localhost","root","","web");
$req1="insert into clientpromo values ('$nom','$prenom','$age','$codepromo')";
$mysqli->query($req1);
?>