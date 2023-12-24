<?php
require 'connexion.php';
$CodeR= $_POST["CodeR"];
$req =$idcom->prepare( "SELECT * From role WHERE CodeR='$CodeR'");
$req->execute();
$count = $req->rowCount();
if($count>0){
    $req1 = $idcom->prepare("DELETE FROM role WHERE CodeR='$CodeR'");
    $req1->execute();
    echo ("role Supprimer Avec succees");
    

}else{
    echo ("Aucun role Avec Ce Code ");
}
?>