<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertion de presentateur</title>
</head>
<body>
    <?php
require "connexion.php";
$CodeP = $_POST['CodeP'];
$NomP = $_POST['NomP'];
$CodeR = $_POST['CodeR'];
$req = $idcom->prepare("SELECT * FROM role  WHERE CodeR='$CodeR'");
$req->execute();
$count = $req->rowCount();
$req1= $idcom->prepare("SELECT * FROM presentateur  WHERE CodeP='$CodeP' and NomP='$NomP' and CodeR='$CodeR'");
$req1->execute();
$count1 = $req1->rowCount();
if($count==0){
    echo ("Code de role n'existe pas ");
   
    
}
if($count1==0){
    $req2 = $idcom->prepare("INSERT INTO  presentateur(CodeP,NomP,CodeR) VALUES  ('$CodeP','$NomP','$CodeR')");
    $req2->execute();
    $count2= $req2->rowCount();
    if($count2>0){
        echo ("Un presentateur est  Ajouter Avec Succes");
    }else{
        echo ("Erreur");
    }

}else{
    echo ("Tu ne peux pas ajouter un presentateur avec ces conditions");
}





    ?>
</body>
</html>