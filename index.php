<?php 
$best_sellers=[
  'Chocolate' , 'Mints' , 'Fudge' , 'Bubble gum' , 'Toffee' , 'jelly beans' ,
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Variables</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Best sellers</h2>
   <li><?php echo $best_sellers[0]; ?></li>
   <li><?php echo $best_sellers[1]; ?></li>
   <li><?php echo $best_sellers[2]; ?></li>
  </body>
</html>