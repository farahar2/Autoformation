  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $age = $_POST['age'];
      if($age<12){
        $price = 20 ;
        echo "Special: Children's Menu included!";
      }
      elseif($age>=12 && $age<=18){
        $price = 40;
      }
      elseif($age>60){
        $price = 30;
      }
      else{
        $price = 60;
      }
      echo "the price is " .$price. "DH";
  }
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Ticketing system for a local event</h2>
  <form method="POST">
    Your age :
    <input type="number" name="age" required>

  </form>

</body>
</html>