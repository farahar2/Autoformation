<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $prix_the = $_POST['prix_the'];
  $nombre_the = $_POST['nombre_the'];
  $etudiant = isset($_POST['etudiant']);
  $prix_brut = $nombre_the * $prix_the;
  if($etudiant == true){
    $prix_total = $prix_brut * 0.2 ;
  }
  elseif($nombre_the > 5){
    $prix_total = $prix_brut - $nombre_the ;
  }
  else {
   $prix_total = $prix_brut ;
  
  }
  echo "Le prix total de ta commande est : " . $prix_total . " DH";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Commande de thé</title>
</head>
<body>

<h2>Calculer le prix de votre commande de thé</h2>

<form method="POST">

Prix d'un thé :
<input type="number" name="prix_the" required>
<br><br>

Nombre de thés :
<inpu>
<br><br>

Êtes-vous étudiant ?
<input type="checkbox" name="etudiant">
<br><br>

<button type="submit">Calculer</button>

</form>

</body>
</html>