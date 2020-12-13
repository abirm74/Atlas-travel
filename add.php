 <?php 
require 'database.php';
if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($POST)){
    $nomhotelError ='';
    $prix_initError ='';
    $prix_promoError ='';
    $nomhotel= htmlentities(trim($_POST['nomhotel']));
    $prix_init= htmlentities(trim($_POST['prix_init']));
    $prix_promo= htmlentities(trim($_POST['prix_promo']));
    $valid = true;
       if (empty($nomhotel)) {
           $nomhotelError = 'Please enter nom hotel';
           $valid = false;
       }else if (!preg_match("/^[a-zA-Z ]*$/",$nomhotel)){ $nomhotelError = "Only letters and white space allowed"; } 
       if (empty($prix_init)) { $prix_initError = 'Please enter prix'; $valid = false; }else if(!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#",$prix_init)){ $prix_initError = 'Please enter a valid prix'; $valid = false; }
       if (empty($prix_promo)) { $$prix_promoError = 'Please enter prix'; $valid = false; }else if(!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#",$prix_promo)){ $prix_promoError = 'Please enter a valid prix'; $valid = false; }
       if ($valid) { 
        $pdo = Database::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO hotel (nomhotel,prix_init,prix_promo) values($nomhotel,$prix_init,$prix_promo)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nomhotel,$prix_init, $prix_promo));
            Database::disconnect();
            header("Location: index.php");
    }
}
 
?>
    
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ajout</title>
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
        
    </head>
    <body>



<br />
<div class="container">

<br />
<div class="row">

<br />
<h3>Ajouter une promotion</h3>
<p>

</div>
<p>

<br />
<form method="post" action="add.php">

<br />
<div class="control-group <?php echo !empty($nomhotelError)?'error':'';?>">
                        <label class="control-label">Nom</label>

<br />
<div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($nomhotel)?$nomhotel:'';?>">
                            <?php if (!empty($nomhotelError)): ?>
                                <span class="help-inline"><?php echo $nomhotelError;?></span>
                            <?php endif; ?>
</div>
<p>

</div>
<p>

                

<br />

<div class="control-group <?php echo !empty($prix_initError)?'error':'';?>">
                        <label class="control-label">prix initial</label>

<br />
<div class="controls">
                            <input name="prix_initial" type="text" placeholder="prix_initial" value="<?php echo !empty($prix_init) ? $prix_init:'';?>">
                            <?php if (!empty($prix_initError)): ?>
                                <span class="help-inline"><?php echo $prix_initError;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>

                

<br />
<div class="control-group <?php echo !empty($prix_promoError)?'error':'';?>">
                        <label class="control-label">prix promo</label>

<br />
<div class="controls">
                            <input name="prix_promo" type="text" placeholder="prix_promo" value="<?php echo !empty($prix_promo) ? $prix_promo:'';?>">
                            <?php if (!empty($prix_promoError)): ?>
                                <span class="help-inline"><?php echo $prix_promoError;?></span>
                            <?php endif;?>
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