<?php

 include 'Model/Client.php';

 
    isset($_REQUEST['cin'])? $cin=$_REQUEST['cin']:$cin=null;
	isset($_REQUEST['first_name'])? $first_name=$_REQUEST['first_name']:$first_name=null;
	isset($_REQUEST['last_name'])? $last_name=$_REQUEST['last_name']:$last_name=null;
	isset($_REQUEST['telephone'])? $telephone=$_REQUEST['telephone']:$telephone=null;
    isset($_REQUEST['email'])? $email=$_REQUEST['email']:$email=null;
        	
	isset($_REQUEST['statement'])? $statement=$_REQUEST['statement']:$statement=null;
    
    $client=new Client($cin, $first_name, $last_name, $telephone, $email, $statement);

    switch($action){
    case 'add':
        if(isset($_REQUEST['add']))
            $client->add($cnx);
		
        include 'View/Clients/add.php';
    break;
    case  'edit':
        if(isset($_REQUEST['edit']))
            $client->edit($cnx);
		
        $detail=$client->view($cnx);
        include 'View/Clients/edit.php';
    break;
    case  'index':
            $clients=$client->index($cnx);
			
        include 'View/Clients/index.php';
    break;
    case  'delete':
            $client->delete($cnx); 
            //header('Location:index.php?controller=clients&action=index');
        echo "<script>window.location.href='index.php?controller=clients&action=index';</script>";
    break;        
    }
?>


