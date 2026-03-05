<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$friends = [
  "Mehdi" => 200,
  "Farah" => 35,
  "Raouya" => 110,
  "Najiba" => 60,
  "Samah" => 98
];

$sum = 0;

foreach($friends as $name => $money){
    $sum += $value;

    if($value > 100){
        echo $key . " owes more than 100 DH<br>";
    }
}

echo "The total is " . $sum;
?>
</body>
</html>