<?php

 include 'Model/Vol.php';

 
    isset($_REQUEST['id_vol'])? $id_vol=$_REQUEST['id_vol']:$id_vol=null;
	isset($_REQUEST['destination'])? $destination=$_REQUEST['destination']:$destination=null;
	isset($_REQUEST['prix'])? $prix=$_REQUEST['prix']:$prix=null;
	isset($_REQUEST['date_depart'])? $date_depart=$_REQUEST['date_depart']:$date_depart=null;
    isset($_REQUEST['date_arrivee'])? $date_arrivee=$_REQUEST['date_arrivee']:$date_arrivee=null;
        
    isset($_REQUEST['photo'])? $photo=$_REQUEST['photo']:$photo=null;
	
	isset($_REQUEST['statement'])? $statement=$_REQUEST['statement']:$statement=null;
    
    $vol=new Vol($id_vol, $destination, $prix, $date_depart, $date_arrivee, $photo, $statement);

    switch($action){
    case 'add':
        if(isset($_REQUEST['add']))
            $vol->add($cnx);
		
        include 'View/Vols/add.php';
    break;
    case  'edit':
        if(isset($_REQUEST['edit']))
            $vol->edit($cnx);
		
        $detail=$vol->view($cnx);
        include 'View/Vols/edit.php';
    break;
    case  'index':
            $vols=$vol->index($cnx);
        include 'View/Vols/index.php';
    break;
    case  'delete':
            $vol->delete($cnx); 
            //header('Location:index.php?controller=vols&action=index');
        echo "<script>window.location.href='index.php?controller=vols&action=index';</script>";
    break;        
    }
?>


