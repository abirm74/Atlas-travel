<?php require('database.php'); 
$idhotel = null;
 if (!empty($_GET['idhotel'])) 
 { $idhotel = $_REQUEST['idhotel']; } 
 if (null == $idhotel) { header("location:index.php"); }
  else { $pdo = Database ::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) .
    $sql = "SELECT * FROM hotel where idhotel =?";
    
    
    $q = $pdo->prepare($sql);
    $q->execute(array($idhotel));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();

  }


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
    </head>

    <body>

<br />
<div class="container">


<br />
<div class="span10 offset1">

<br />
<div class="row">

<br />
<h3>Edition</h3>
<p>

</div>
<p>



<br />
<div class="form-horizontal" >

<br />
<div class="control-group">
                        <label class="control-label">Name Hostel</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nomhotel']; ?>
                            </label>
</div>
<p>

</div>
<p>



<br />
<div class="control-group">
                        <label class="control-label">Prix initial</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['prix_init']; ?>
                            </label>
</div>
<p>

</div>
<p>


<br />
<div class="control-group">
                        <label class="control-label">prix promotion</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['prix_promo']; ?>
                            </label>
</div>
<p>

</div>
<p>



<br />
<div class="form-actions">
                        <a class="btn" href="index.php">Back</a>
</div>
<p>



</div>
<p>

</div>
<p>


</div>
<p>
<!-- /container -->
    </body>
</html>