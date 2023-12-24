<?php
require "connexion.php";
$CodeR=$_POST['CodeR'];
$Libelle=$_POST['Libelle'];
$Prix=$_POST['Prix'];
$sql="UPDATE  role SET  Libelle='$Libelle',Prix='$Prix' where CodeR='$CodeR'";
$idcom->exec($sql);
echo("Role mis a jour avec succes");


?>
