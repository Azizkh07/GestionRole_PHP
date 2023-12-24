<?php
require 'connexion.php';
$req=$idcom->prepare("SELECT  CodeN,Titre,Duree,CodeP FROM numero;");
$req->execute();
$count=$req->rowCount();
if($count<=0){
    echo ("Aucun numero la Dans Base  ");
}


?>
<!DOCTYPE html>
<html>
<head></head>
<body>
 <h1>Listes Des Numeros</h1>
 <table border="1">
   <thead>
     <tr>
       <th>Code numero</th>
       <th>titre</th>
       <th>Duree</th>
       <th>Code Presentateur</th>

       
       
     </tr>
   </thead>
   <tbody>
     <?php while($row = $req->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['CodeN']); ?></td>
       <td><?php echo htmlspecialchars($row['Titre']); ?></td>
       <td><?php echo htmlspecialchars($row['Duree']); ?></td>
       <td><?php echo htmlspecialchars($row['CodeP']); ?></td>
    
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 </html>