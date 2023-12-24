<?php
require 'connexion.php';
$CodeP=$_POST['CodeP'];
$NomP=$_POST['NomP'];
$CodeR=$_POST['CodeR'];
$req = $idcom->prepare("SELECT * FROM presentateur WHERE CodeP='$CodeP' and CodeR='$CodeR'");
$req->execute();
$count = $req->rowCount();
if($count>0){
    $req1 = $idcom->prepare("UPDATE presentateur SET  NomP='$NomP' WHERE CodeP='$CodeP' and CodeR='$CodeR'");
    $req1->execute();
    $count1 = $req1->rowCount();
    if($count1>0){
        echo ("Le presentateur modifier avec succees");

    }else{
        echo ("Erreur");

    }
    
}else{
    echo ("Aucune presentateur Avec Les Critere Entrer");
}


//It prepares a SELECT statement to retrieve rows from the "presentateur" table where the "CodeP" column matches the value of the $CodeP variable and the "CodeR" column matches the value of the $CodeR variable.
//It executes the SELECT statement using the execute() method of the $req object.
//It retrieves the number of rows returned by the SELECT statement using the rowCount() method of the $req object and stores the count in the $count variable.
//If the count is greater than zero, it means that there is at least one row that matches the specified criteria, so it prepares an UPDATE statement to update the "NomP" column with the value of the $NomP variable for the rows that match the same criteria.
//It executes the UPDATE statement using the execute() method of the $req1 object.
//It retrieves the number of rows affected by the UPDATE statement using the rowCount() method of the $req1 object and stores the count in the $count1 variable.
//If the count1 is greater than zero, it means that at least one row has been updated successfully, so it displays a success message.
//Otherwise, it displays an error message.

?>
