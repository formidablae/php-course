<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    $name = "PHP Store";
    $credit = 1000;

    echo "<h1>Welcome to " . $name . "!</h1>";
    echo "<h2>You have $" . $credit . " in your wallet.</h2>";

    $products['Computer']=750;
    $products['Car']=15000;
    $products['iPhone']=1000;
    $products['Toaster']=75;

    foreach($products as $key => $value){
      echo "<p>The " . $key . " costs " . $value . "</p>";
    }

    $amount=800;
    $taxRate=0.0825;
    $addedTax= $amount*$taxRate;  //amount = 800, tax = .0825
    echo $addedTax;
    ?>
  </body>
</html>
