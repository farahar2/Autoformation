<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $_SESSION['nom'] = $_POST["nom"];
header("Location: page2.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page1</title>
</head>
<body>
  <form method="POST">
  Username :
  <input type="text" name="nom" required>
  <button type="submit">Next</button>
</form>
</body>
</html>