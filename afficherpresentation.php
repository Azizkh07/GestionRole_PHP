<?php
require 'connexion.php';
$req=$idcom->prepare("SELECT  CodeP,NomP,CodeR FROM presentateur;");
$req->execute();
$count=$req->rowCount();
if($count<=0){
    echo ("Aucun Seance  Dans Base  ");
}


?>
<!DOCTYPE html>
<html>
<head></head>
<body>
 <h1>Listes Des Presentateurs</h1>
 <table border="1">
   <thead>
     <tr>
       <th>Code Presentateur</th>
       <th>Nom Presentateur</th>
       <th>Code Role</th>
       </tr>
   </thead>
   <tbody>
     <?php while($row = $req->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['CodeP']); ?></td>
       <td><?php echo htmlspecialchars($row['NomP']); ?></td>
       <td><?php echo htmlspecialchars($row['CodeR']); ?></td>
    
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 </html>