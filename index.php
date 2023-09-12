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
    <h2>Nutrition (per 100g)</h2>
    <p>Fat:  <?php echo $nutrition['fat']; ?>%</p>
    <p>sugar:  <?php echo $nutrition['sugar']; ?>%</p>
    <p>salt:  <?php echo $nutrition['salt']; ?>%</p>
    <p>protein:  <?php echo $nutrition['protein']; ?>%</p>
  </body>
</html>