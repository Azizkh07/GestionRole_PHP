<?php
require 'connexion.php';
$CodeN= $_POST["CodeN"];
$req =$idcom->prepare( "SELECT * From numero WHERE CodeN='$CodeN'");
$req->execute();
$count = $req->rowCount();
if($count>0){
    $req1 = $idcom->prepare("DELETE FROM numero WHERE CodeN='$CodeN'");
    $req1->execute();
    echo ("numero Supprimer Avec succees");
    

}else{
    echo ("Aucun numero Avec Ce Code ");
}
?>