<?php
$nom = "";
$email = "";
$message = "";
$error = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

  $nom = htmlspecialchars($_POST["nom"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  if(strpos($email,"@") === false){
    $error = "Email invalide";
  }
}
?>
<!DOCTYPE html>
<html>
<body>
<form method="POST">
Votre nom :
<input type="text" name="nom" value="<?php echo $nom ?>" required>
<br><br>
Votre email :
<input type="text" name="email" value="<?php echo $email ?>" required>
<br><br>
Message :
<textarea name="message"><?php echo $message ?></textarea>
<br><br>
<button type="submit">Envoyer</button>

</form>
<p style="color:red;">
<?php echo $error; ?>
</p>

</body>
</html>