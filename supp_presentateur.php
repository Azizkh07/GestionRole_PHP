<?php
require 'connexion.php';
$CodeP= $_POST["CodeP"];
$req =$idcom->prepare( "SELECT * From presentateur WHERE CodeP='$CodeP'");
$req->execute();
$count = $req->rowCount();
if($count>0){
    $req1 = $idcom->prepare("DELETE FROM presentateur WHERE CodeP='$CodeP'");
    $req1->execute();
    echo ("presentateur Supprimer Avec succees");
    

}else{
    echo ("Aucun presentateur Avec Ce Code ");
}
?>