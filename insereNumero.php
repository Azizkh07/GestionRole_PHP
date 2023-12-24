<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require "connexion.php";
$CodeN=$_POST['CodeN'];
    $Titre=$_POST['Titre'];
    $Duree=$_POST['Duree'];
    $CodeP=$_POST['CodeP'];
$req = $idcom->prepare("SELECT * FROM presentateur  WHERE CodeP='$CodeP'");
$req->execute();
$count = $req->rowCount();
$req1= $idcom->prepare("SELECT * FROM numero WHERE CodeN='$CodeN' and Titre='$Titre' and Duree='$Duree'and CodeP='$CodeP'");
$req1->execute();
$count1 = $req1->rowCount();
if($count==0){
    echo ("Code de numero n'existe pas ");
   
    
}
if($count1==0){
    $req2 = $idcom->prepare("INSERT INTO  numero VALUES  ('$CodeN','$Titre','$Duree','$CodeP')");
    $req2->execute();
    $count2= $req2->rowCount();
    if($count2>0){
        echo ("Un numero est  Ajouter Avec Succes");
    }else{
        echo ("Erreur");
    }

}else{
    echo ("Tu ne peux pas ajouter un numero avec ces conditions");
}


?>






</body>
</html>