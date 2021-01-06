<?php

class Vol
{
    var $id_vol;
    var $destination;
    var $prix;
    var $date_depart;
    var $date_arrivee;
	var $statement;
	var $photo;

    function __construct($id_vol, $destination, $prix, $date_depart, $date_arrivee, $photo, $statement)
    {
        $this->id_vol = $id_vol;
        $this->destination = $destination;
        $this->prix = $prix;
        $this->date_depart = $date_depart;
        $this->date_arrivee = $date_arrivee;
		$this->photo = $photo;
		$this->statement = $statement;
    }

    function add($cnx)
    {
		$sql='insert into vols (destination,prix,date_depart,date_arrivee,statement,photo) values ("'.$this->destination.'","'.$this->prix.'","'.$this->date_depart.'","'.$this->date_arrivee.'","'.$this->statement.'","'.$this->photo.'")';

		$cnx->query($sql);
    }

    function edit($cnx)
    {
		$sql='update vols set destination="'.$this->destination.'",prix="'.$this->prix.'",date_depart="'.$this->date_depart.'",date_arrivee="'.$this->date_arrivee.'",statement="'.$this->statement.'",photo="'.$this->photo.'" where id_vol= '.$this->id_vol;

        $cnx->query($sql);
    }

    function index($cnx)
    {
        $sql = "select * from vols";
        $req = $cnx->query($sql);
        $vols = array();
        while ($res = $req->fetch()) {
            $vols[$res['id_vol']]['id_vol'] = $res['id_vol'];
            $vols[$res['id_vol']]['destination'] = $res['destination'];
            $vols[$res['id_vol']]['prix'] = $res['prix'];
            $vols[$res['id_vol']]['date_depart'] = $res['date_depart'];
			$vols[$res['id_vol']]['date_arrivee'] = $res['date_arrivee'];
			$vols[$res['id_vol']]['photo'] = $res['photo'];
			$vols[$res['id_vol']]['statement'] = $res['statement'];
        }
        return $vols;
    }

    function view($cnx)
    {
        $sql = "select * from vols where id_vol='$this->id_vol'";
        $req = $cnx->query($sql);
        $vol = $req->fetch();
        return $vol;

    }

    function delete($cnx)
    {
        $sql = "delete from vols where id_vol='$this->id_vol'";
        $cnx->query($sql);
    }

}

?>

