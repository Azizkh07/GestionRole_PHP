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
 $CodeR=$_POST['CodeR'];
 $Libelle=$_POST['Libelle'];
 $Prix=$_POST['Prix'];
 $sql="INSERT INTO  role VALUES('$CodeR','$Libelle','$Prix')";
 $idcom->exec($sql);
 echo("Role inserer avec succes");

?>
    
    
</body>
</html>