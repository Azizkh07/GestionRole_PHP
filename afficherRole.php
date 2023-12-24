<?php
require 'connexion.php';
$req=$idcom->prepare("SELECT  CodeR,Libelle,Prix FROM role;");
$req->execute();
$count=$req->rowCount();
if($count<=0){
    echo ("Aucun role Dans Base  ");
}


?>
<!DOCTYPE html>
<html>
<head></head>
<body>
 <h1>Listes Des Roles</h1>
 <table border="1">
   <thead>
     <tr>
       <th>Code role</th>
       <th>Libelle</th>
       <th>Prix</th>

       
       
     </tr>
   </thead>
   <tbody>
     <?php while($row = $req->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['CodeR']); ?></td>
       <td><?php echo htmlspecialchars($row['Libelle']); ?></td>
       <td><?php echo htmlspecialchars($row['Prix']); ?></td>
    
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 </html>