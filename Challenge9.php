<?php
session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}
$items = ["Lipstick","Mascara","Parfum","Foundation","Eyeliner"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $item = $_POST["item"];
  if(!in_array($item, $_SESSION['cart'])){
        $_SESSION['cart'][] = $item;
    }
    header("Location: Challenge9.php");
    exit();
}
$count = count($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Challenge9</title>
</head>
<body>
<h3>Cart: <?php echo $count; ?> items</h3>
<?php foreach($items as $item){ ?>
    <p><?php echo $item; ?></p>

    <form method="POST">
        <input type="hidden" name="item" value="<?php echo $item; ?>">
        <button type="submit">Add to Cart</button>
    </form>
<?php } ?>
</body>
</html>