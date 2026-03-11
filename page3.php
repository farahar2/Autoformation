<?php
session_start();
if(!isset($_SESSION["nom"]) || !isset($_SESSION["Language"])){
  header("Location: page1.php");
   exit;
}
$username = $_SESSION["nom"];
$language = $_SESSION["Language"];
echo "Hello $username , you love $language !";
?>