<?php
include "connexion.php";
$reqInsert='delete from hotels where id_hotel= '.$_GET["id"];

$idcom->exec($reqInsert);
header("location:listesHotels.php");