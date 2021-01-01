<?php
include "connexion.php";
$reqInsert='delete from reservations where id_reservation= '.$_GET["id"];

$idcom->exec($reqInsert);
header("location:listesReservation.php");