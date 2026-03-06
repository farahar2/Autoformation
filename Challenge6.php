<?php
/*function greetUser($name){
  echo "Hello " .$name. "! Ready to code?";
}
greetUser("Farah");


function  calculateArea($width, $height){
  return $area = $width * $height;
}
$totalArea = calculateArea(10, 5);
echo "The total area is " .$totalArea. " square units.";
*/

/*function isAdult($age){
  if($age>=18){
    return 1;}
  else {
    return 0;
}
}
$result = isAdult(11);
/*switch ($result){
case 0:
  echo "Access Denied";
  break;
case 1:
  echo "Access Granted";
  break;
}

if($result == 0){
  echo "Access Denied";
}
else {
  echo "Access Granted";
}*/


/*function multiplyNumbers($a, $b){
if(is_numeric($a) && is_numeric($b)){
  return $a * $b;
}
else {
  return "Error: Invalid Input.";
}
}
echo multiplyNumbers(5, 10);
echo "<br>";
echo multiplyNumbers(5, "apple");*/


function manualReverse($text){
  $chaine = " ";
  for($i=strlen($text)-1;$i>=0;$i--){
  $chaine = $chaine .$text[$i];
  }
  return $chaine;
}
echo manualReverse("Hello");

?>

