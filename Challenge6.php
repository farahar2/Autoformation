<?php

$products = [
  ["name"=>"Laptop","category"=>"tech"],
  ["name"=>"Phone","category"=>"tech"],
  ["name"=>"Tablet","category"=>"tech"],
  ["name"=>"Chair","category"=>"furniture"],
  ["name"=>"Desk","category"=>"furniture"]
];
$category = $_GET['category'] ?? "";
$sort = $_GET['sort'] ?? "";
if($sort == "asc"){
  sort($products);
}
if($sort == "desc"){
  rsort($products);
}
foreach($products as $p){
  // FILTER
  if($category == "" || $p['category'] == $category){
    echo $p['name']." - ".$p['category']."<br>";
  }
}
?>
<br>
<a href="?category=tech">Tech</a>
<a href="?category=furniture">Furniture</a>
<a href="?">All</a>
<br><br>
<a href="?sort=asc">A-Z</a>
<a href="?sort=desc">Z-A</a>