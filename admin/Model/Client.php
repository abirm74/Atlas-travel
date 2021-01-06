<?php

class Client
{
    var $cin;
    var $first_name;
    var $last_name;
    var $telephone;
    var $email;
	var $statement;


    function __construct($cin, $first_name, $last_name, $telephone, $email, $statement)
    {
        $this->cin = $cin;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->telephone = $telephone;
        $this->email = $email;
		$this->statement = $statement;
    }

    function add($cnx)
    {
		$sql='insert into client (first_name,last_name,telephone,email,statement) values ("'.$this->first_name.'","'.$this->last_name.'","'.$this->telephone.'","'.$this->email.'","'.$this->statement.'")';

		$cnx->query($sql);
    }

    function edit($cnx)
    {
		$sql='update client set first_name="'.$this->first_name.'",last_name="'.$this->last_name.'",telephone="'.$this->telephone.'",email="'.$this->email.'",statement="'.$this->statement.'" where cin= '.$this->cin;

        $cnx->query($sql);
    }

    function index($cnx)
    {
        $sql = "select * from client";
        $req = $cnx->query($sql);
        $clients = array();
        while ($res = $req->fetch()) {
            $clients[$res['cin']]['cin'] = $res['cin'];
            $clients[$res['cin']]['first_name'] = $res['first_name'];
            $clients[$res['cin']]['last_name'] = $res['last_name'];
            $clients[$res['cin']]['telephone'] = $res['telephone'];
			$clients[$res['cin']]['email'] = $res['email'];
			$clients[$res['cin']]['statement'] = $res['statement'];
        }
        return $clients;
    }

    function view($cnx)
    {
        $sql = "select * from client where cin='$this->cin'";
        $req = $cnx->query($sql);
        $client = $req->fetch();
        return $client;

    }

    function delete($cnx)
    {
        $sql = "delete from client where cin='$this->cin'";
        $cnx->query($sql);
    }

}

?>

