<?php

class Hotel
{
    var $id_hotel;
    var $name;
    var $etoile;
    var $total_chambre;
    var $nb_disponible;
	var $phone;
	var $photo;
	var $statement;

    function __construct($id_hotel, $name, $etoile, $total_chambre, $nb_disponible, $phone, $photo, $statement)
    {
        $this->id_hotel = $id_hotel;
        $this->name = $name;
        $this->etoile = $etoile;
        $this->total_chambre = $total_chambre;
        $this->nb_disponible = $nb_disponible;
		$this->phone = $phone;
		$this->photo = $photo;
		$this->statement = $statement;
    }

    function add($cnx)
    {
        $sql='insert into hotels (name,etoile,total_chambre,nb_disponible,phone,photo,statement) values ("'.$this->name.'","'.$this->etoile.'","'.$this->total_chambre.'","'.$this->nb_disponible.'","'.$this->phone.'","'.$this->photo.'","'.$this->statement.'")';
		
		$cnx->query($sql);
    }

    function edit($cnx)
    {
		$sql='update hotels set name="'.$this->name.'",etoile="'.$this->etoile.'",total_chambre="'.$this->total_chambre.'",phone="'.$this->phone.'",photo="'.$this->photo.'",statement="'.$this->statement.'",nb_disponible="'.$this->nb_disponible.'" where id_hotel= '.$this->id_hotel;
        $cnx->query($sql);
    }

    function index($cnx)
    {
        $sql = "select * from hotels";
        $req = $cnx->query($sql);
        $hotels = array();
        while ($res = $req->fetch()) {
            $hotels[$res['id_hotel']]['id_hotel'] = $res['id_hotel'];
            $hotels[$res['id_hotel']]['name'] = $res['name'];
            $hotels[$res['id_hotel']]['etoile'] = $res['etoile'];
            $hotels[$res['id_hotel']]['total_chambre'] = $res['total_chambre'];
			$hotels[$res['id_hotel']]['nb_disponible'] = $res['nb_disponible'];
			$hotels[$res['id_hotel']]['phone'] = $res['phone'];
			$hotels[$res['id_hotel']]['photo'] = $res['photo'];
			$hotels[$res['id_hotel']]['statement'] = $res['statement'];
        }
        return $hotels;
    }

    function view($cnx)
    {
        $sql = "select * from hotels where id_hotel='$this->id_hotel'";
        $req = $cnx->query($sql);
        $hotel = $req->fetch();
        return $hotel;

    }

    function delete($cnx)
    {
        $sql = "delete from hotels where id_hotel='$this->id_hotel'";
        $cnx->query($sql);
    }

}

?>

