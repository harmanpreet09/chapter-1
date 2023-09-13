<?php 
$offers=[
  ['name' => 'toffee' , 'price' => 5, 'stock'=>120,],
  ['name' => 'Mints' , 'price' => 3, 'stock'=>66,],
  ['name' => 'Fudge' , 'price' => 4, 'stock'=>97,],
]
;

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Variables</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
   <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
   <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
   <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
   <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
   <p>protein: <?php echo $nutrition['protien']; ?>%</p>
  </body>
</html>