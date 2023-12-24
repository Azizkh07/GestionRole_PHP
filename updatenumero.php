<?php
require 'connexion.php';
$CodeN=$_POST['CodeN'];
$Titre=$_POST['Titre'];
$Duree=$_POST['Duree'];
$CodeP=$_POST['CodeP'];
$req = $idcom->prepare("SELECT * FROM numero WHERE CodeN='$CodeN' and CodeP='$CodeP'");
$req->execute();
$count = $req->rowCount();
if($count>0){
    $req1 = $idcom->prepare("UPDATE numero SET  Titre='$Titre',Duree='$Duree' WHERE CodeP='$CodeP' and CodeN='$CodeN'");
    $req1->execute();
    $count1 = $req1->rowCount();
    if($count1>0){
        echo ("Le numero est modifier avec succees");

    }else{
        echo ("Erreur");

    }
    
}else{
    echo ("Aucune numero Avec Les Critere Entrer");
}


?>
