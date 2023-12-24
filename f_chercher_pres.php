<?php
require 'connexion.php';
$critere=$_POST["critere"];
$val=$_POST["val"];
$req = $idcom->prepare("SELECT *  FROM  presentateur WHERE $critere='$val'");

$req->execute();
$count = $req->rowCount();
if($count>0){
    echo "presentateur existe dans la base";
}else{
    echo"presentateur n'existe pas dans la base ";
}



?>