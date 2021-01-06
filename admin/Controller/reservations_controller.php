<?php

 include 'Model/Reservation.php'; 
 include 'Model/Vol.php';
 include 'Model/Client.php';
 include 'Model/Hotel.php';
 
 
    isset($_REQUEST['id_reservation'])? $id_reservation=$_REQUEST['id_reservation']:$id_reservation=null;
	isset($_REQUEST['date_creation'])? $date_creation=$_REQUEST['date_creation']:$date_creation=null;
	isset($_REQUEST['id_hotel'])? $id_hotel=$_REQUEST['id_hotel']:$id_hotel=null;
	isset($_REQUEST['id_vol'])? $id_vol=$_REQUEST['id_vol']:$id_vol=null;
    isset($_REQUEST['id_client'])? $id_client=$_REQUEST['id_client']:$id_client=null;
    isset($_REQUEST['prix'])? $prix=$_REQUEST['prix']:$prix=null;
	isset($_REQUEST['statement'])? $statement=$_REQUEST['statement']:$statement=null;
    
    $reservation=new Reservation($id_reservation, $date_creation, $id_hotel, $id_vol, $id_client, $prix, $statement);

	$client=new Client('', '', '', '', '', '');
	$hotel=new Hotel('', '', '', '', '', '', '', '');
	$vol=new Vol('', '', '', '', '', '', '');
	
    switch($action){
    case 'add':
        if(isset($_REQUEST['add']))
		{
			$reservation->add($cnx);
			echo "<script>window.location.href='index.php?controller=reservations&action=index';</script>";
		}
		
		$clients=$client->index($cnx);
		$hotels=$hotel->index($cnx);
		$vols=$vol->index($cnx);
		
        include 'View/Reservations/add.php';
    break;
    case  'edit':
        if(isset($_REQUEST['edit']))
		{
			$reservation->edit($cnx);
			echo "<script>window.location.href='index.php?controller=reservations&action=index';</script>";
		}
		
		$clients=$client->index($cnx);
		$hotels=$hotel->index($cnx);
		$vols=$vol->index($cnx);
		
        $detail=$reservation->view($cnx);
        include 'View/Reservations/edit.php';
    break;
    case  'index':
            $reservations=$reservation->index($cnx);
        include 'View/Reservations/index.php';
    break;
    case  'delete':
            $reservation->delete($cnx); 
            //header('Location:index.php?controller=reservations&action=index');
        echo "<script>window.location.href='index.php?controller=reservations&action=index';</script>";
    break; 
	
	default:
		$clients=$client->index($cnx);
		$hotels=$hotel->index($cnx);
		$vols=$vol->index($cnx);
		$reservations=$reservation->index($cnx);
	include 'View/Reservations/statistique.php';
    }
?>


