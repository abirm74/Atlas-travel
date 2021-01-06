<?php

class Reservation
{
    var $id_reservation;
    var $date_creation;
    var $id_hotel;
    var $id_vol;
    var $id_client;
	var $prix;
	var $statement;

    function __construct($id_reservation, $date_creation, $id_hotel, $id_vol, $id_client, $prix, $statement)
    {
        $this->id_reservation = $id_reservation;
        $this->date_creation = $date_creation;
        $this->id_hotel = $id_hotel;
        $this->id_vol = $id_vol;
        $this->id_client = $id_client;
		$this->prix = $prix;
		$this->statement = $statement;
    }

    function add($cnx)
    {
		$sql='insert into reservations (date_creation,id_hotel,id_vol,id_client,prix,statement) values ("'.$this->date_creation.'","'.$this->id_hotel.'","'.$this->id_vol.'","'.$this->id_client.'","'.$this->prix.'","'.$this->statement.'")';

		$cnx->query($sql);
    }

    function edit($cnx)
    {
		$sql='update reservations set date_creation="'.$this->date_creation.'",id_hotel="'.$this->id_hotel.'",id_vol="'.$this->id_vol.'",id_client="'.$this->id_client.'",prix="'.$this->prix.'",statement="'.$this->statement.'" where id_reservation= '.$this->id_reservation;

        $cnx->query($sql);
    }

    function index($cnx)
    {
        $sql = "select r.*, c.first_name, c.last_name, h.name, v.destination from reservations r, client c, hotels h, vols v where r.id_client=c.cin and r.id_hotel=h.id_hotel and r.id_vol = v.id_vol";
        $req = $cnx->query($sql);
        $reservations = array();
        while ($res = $req->fetch()) {
            $reservations[$res['id_reservation']]['id_reservation'] = $res['id_reservation'];
            $reservations[$res['id_reservation']]['date_creation'] = $res['date_creation'];
            $reservations[$res['id_reservation']]['id_hotel'] = $res['id_hotel'];
            $reservations[$res['id_reservation']]['id_vol'] = $res['id_vol'];
			$reservations[$res['id_reservation']]['id_client'] = $res['id_client'];
			$reservations[$res['id_reservation']]['prix'] = $res['prix'];
			$reservations[$res['id_reservation']]['statement'] = $res['statement'];
			
			$reservations[$res['id_reservation']]['client'] = $res['first_name']." ".$res['last_name'];
			$reservations[$res['id_reservation']]['hotel'] = $res['name'];
			$reservations[$res['id_reservation']]['vol'] = $res['destination'];
        }
        return $reservations;
    }

    function view($cnx)
    {
        $sql = "select * from reservations where id_reservation='$this->id_reservation'";
        $req = $cnx->query($sql);
        $reservation = $req->fetch();
        return $reservation;

    }

    function delete($cnx)
    {
        $sql = "delete from reservations where id_reservation='$this->id_reservation'";
		//echo $sql;die;
        $cnx->query($sql);
    }

}

?>

