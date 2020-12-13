<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ATLAS-TRAVEL </title>
        <title>ATLAS-Promotion </title>

        
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        	<link href="css/responsive.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
        

    </head>
    <body>

<br />
<div class="container">

<br />
<div class="row">

<br />
<h2>ATLAS-TRAVEL-ADMIN</h2>
<p>

</div>
<p>


<br />
<div class="row">
                
                    <a href="add.php" class="btn btn-success">Ajouter une promotion</a>
                

<br />
<div class="table-responsive">

<br />
<table class="table table-hover table-bordered">

<br />
<thead>


<th>ID Hotel</th>
<p>



<th>Nom hotel</th>
<p>



<th>prix initial</th>
<p>



<th>prix promotion</th>
<p>




</thead>
<p>


<br />
<tbody>

<?php    include 'database.php';
$pdo = Database::connect();

$sql = 'SELECT * FROM hotel ORDER BY idhotel DESC';
foreach ($pdo->query($sql) as $row) {

//on inclut notre fichier de connection $pdo = Database::connect(); //on se connecte à la base $sql = 'SELECT * FROM user ORDER BY id DESC'; //on formule notre requete foreach ($pdo->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
        echo '
<br />
<tr>';
echo' 

<td>' . $row['idhotel'] . '</td>
<p>
';

        echo' 

<td>' . $row['nomhotel'] . '</td>
<p>
';
        echo'

<td>' . $row['prix_init'] . '</td>
<p>
';
        echo'

<td>' . $row['prix_promo'] . '</td>
<p>
';
        echo'

<td>';
        echo '<a class="btn" href="edit.php?id=' . $row['idhotel'] . '">Read</a>';// un autre td pour le bouton d'edition
        echo '</td>
<p>
';
        echo '

<td>';
        echo '<a class="btn btn-success" href="update.php?id=' . $row['idhotel'] . '">Update</a>';// un autre td pour le bouton d'update
        echo '</td>
<p>
';
        echo'

<td>';
        echo '<a class="btn btn-danger" href="delete.php?id=' . $row['idhotel'] . ' ">Delete</a>';// un autre td pour le bouton de suppression
        echo '</td>
<p>
';
        echo '</tr>
<p>
';
}
                            Database::disconnect(); //on se deconnecte de la base
    ;
    ?>    
</tbody>
<p>

</table>
<p>

</div>
<p>


</div>
<p>


</div>
<p>

    </body>
</html>
