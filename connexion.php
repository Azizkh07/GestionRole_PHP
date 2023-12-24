<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion avec la base </title>
</head>
<body>





<?php

$host="localhost";
$user="root";
$password="";
$db="gestion_presentateur";
try {
    
    $idcom = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    $idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    exit();
    }

    
?>


    
</body>
</html>