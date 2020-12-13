<?php require 'database.php'; $idhotel = null; if ( !empty($_GET['idhotel'])) { $id = $_REQUEST['idhotel']; } if ( null==$idhotel ) { header("Location: index.php"); } if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { // on initialise nos erreurs $nameError = null; $firstnameError = null; $ageError = null; $telError = null; $emailError = null; $paysError = null; $commentError = null; $metierError = null; $urlError = null; // On assigne nos valeurs $name = $_POST['name']; $firstname = $_POST['firstname']; $age = $_POST['age']; $tel = $_POST['tel']; $email = $_POST['email']; $pays = $_POST['pays']; $comment = $_POST['comment']; $metier = $_POST['metier']; $url = $_POST['url']; // On verifie que les champs sont remplis $valid = true; if (empty($name)) { $nameError = 'Please enter Name'; $valid = false; } if (empty($firstname)) { $firstnameError = 'Please enter firstname'; $valid = false; } if (empty($email)) { $emailError = 'Please enter Email Address'; $valid = false; } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $emailError = 'Please enter a valid Email Address'; $valid = false; } if (empty($age)) { $ageError = 'Please enter your age'; $valid = false; } if (empty($tel)) { $telError = 'Please enter phone'; $valid = false; } if (!isset($pays)) { $paysError = 'Please select a country'; $valid = false; } if (empty($comment)) { $commentError = 'Please enter a description'; $valid = false; } if (!isset($metier)) { $metierError = 'Please select a job'; $valid = false; } if (empty($url)) { $urlError = 'Please enter website url'; $valid = false; } // mise à jour des donnés if ($valid) { $pdo = Database::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
             $sql = "UPDATE hotel SET name = ?,nomhotel = ?,prix_init = ?,prix_promo = ? WHERE id = ?";
             $pdo = Database::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $q = $pdo->prepare($sql);
             $q->execute(array($nomhotel,$prix_init, $prix_promo));
             Database::disconnect();
             header("Location: index.php");
         } 
        else {


              $pdo = Database::connect();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "SELECT * FROM hotel where idhotel = ?";
             $q = $pdo->prepare($sql);
             $q->execute(array($id));
             $data = $q->fetch(PDO::FETCH_ASSOC);
             $nomhotel = $data['nomhotel'];
             $prix_init = $data['prix_init'];
             $prix_promo = $data['prix_promo'];
             
             Database::disconnect();
         }
     
     ?>

<!DOCTYPE html>
<html>
 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>Crud-Update</title>
         <link href="css/bootstrap.min.css" rel="stylesheet">
     <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />

 </head>
 <body>
  

<br />
<div class="container">

<br />
<div class="row">

<br />
<h3>Modifier un promotion</h3>
<p>

</div>
<p>

<br />
<form method="post" action="update.php?id=<?php echo $idhotel ;?>">

<br />
<div class="control-group <?php echo!empty($nomhotelError) ? 'error' : ''; ?>">
                 <label class="control-label">Name</label>

<br />
<div class="controls">
                     <input name="name" type="text"  placeholder="Name" value="<?php echo!empty($nomhotel) ? $nomhotel : ''; ?>">
                     <?php if (!empty($nameError)): ?>
                         <span class="help-inline"><?php echo $nomhotelError; ?></span>
                     <?php endif; ?>
</div>
<p>

</div>
<p>



<br />
<div class="control-group<?php echo!empty($prix_initError) ? 'error' : ''; ?>">
                 <label class="control-label">prix initial</label>

<br />
<div class="controls">
                     <input type="number" name="prix_init" value="<?php echo!empty($prix_init) ? $age : ''; ?>">
                     <?php if (!empty($ageError)): ?>
                         <span class="help-inline"><?php echo $prix_initError; ?></span>
                     <?php endif; ?>
</div>
<p>

</div>
<p>




<br />
<div class="control-group <?php echo!empty($prix_promoError) ? 'error' : ''; ?>">
                 <label class="control-label">prix avec promo</label>

<br />
<div class="controls">
                     <input name="prix promo" type="text" placeholder="prix_promo" value="<?php echo!empty($prix_promo) ? $prix_promo : ''; ?>">
                     <?php if (!empty($prix_promoError)): ?>
                         <span class="help-inline"><?php echo $prix_promoError; ?></span>
                     <?php endif; ?>
</div>
<p>

</div>
<p>




<br />
<div class="form-actions">
                 <input type="submit" class="btn btn-success" name="submit" value="submit">
                 <a class="btn" href="index.php">Retour</a>
</div>
<p>

         </form>
<p>



</div>
<p>


 </body>
</html>