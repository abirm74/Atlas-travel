<?php
include "connexion.php";
$reqInsert='delete from vols where id_vol= '.$_GET["id"];

$idcom->exec($reqInsert);
header("location:listesvols.php");