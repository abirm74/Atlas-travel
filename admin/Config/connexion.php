<?php
try{
    $host="mysql:host=localhost;dbname=web";
    $user="root";
    $password="";
    $cnx=new PDO ($host,$user,$password);
}

catch(Exception $e){
    die ("Imposible de se connecter à MySQL: ". $e->getMessage());
}