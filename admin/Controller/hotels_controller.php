<?php

 include 'Model/Hotel.php';

 
    isset($_REQUEST['id_hotel'])? $id_hotel=$_REQUEST['id_hotel']:$id_hotel=null;
	isset($_REQUEST['name'])? $name=$_REQUEST['name']:$name=null;
	isset($_REQUEST['etoile'])? $etoile=$_REQUEST['etoile']:$etoile=null;
	isset($_REQUEST['total_chambre'])? $total_chambre=$_REQUEST['total_chambre']:$total_chambre=null;
    isset($_REQUEST['nb_disponible'])? $nb_disponible=$_REQUEST['nb_disponible']:$nb_disponible=null;
    
    isset($_REQUEST['phone'])? $phone=$_REQUEST['phone']:$phone=null;
    
    isset($_FILES["photo"])? $photo=$_FILES["photo"]["name"]:$photo=null;
	isset($_FILES["photo"])? $path=$_FILES["photo"]["tmp_name"]:$path=null;
	
	
	isset($_REQUEST['statement'])? $statement=$_REQUEST['statement']:$statement=null;
    
    $hotel=new Hotel($id_hotel, $name, $etoile, $total_chambre, $nb_disponible, $phone, $photo, $statement);

    switch($action){
    case 'add':
        if(isset($_REQUEST['add']))
		{
			$hotel->add($cnx);
			
			if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
				copy($path, 'images/Hotels/'.$photo);
			}
			echo "<script>window.location.href='index.php?controller=hotels&action=index';</script>";
		}
		
        include 'View/Hotels/add.php';
    break;
    case  'edit':
        if(isset($_REQUEST['edit']))
            $hotel->edit($cnx);
		
        $detail=$hotel->view($cnx);
        include 'View/Hotels/edit.php';
    break;
    case  'index':
            $hotels=$hotel->index($cnx);
        include 'View/Hotels/index.php';
    break;
    case  'delete':
            $hotel->delete($cnx); 
            //header('Location:index.php?controller=hotels&action=index');
        echo "<script>window.location.href='index.php?controller=hotels&action=index';</script>";
    break;        
    }
?>


