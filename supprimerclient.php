<?php
include "connexion.php";
$reqInsert='delete from client where cin= '.$_GET["id"];

$idcom->exec($reqInsert);
header("location:listesclient.php");