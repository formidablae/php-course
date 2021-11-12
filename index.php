<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
	    $name = "PHP Store";
			$credit = 1000; 

	    echo "<h1>Welcome to ".$name."!</h1>";
	    echo "<h2>You have $".$credit." in your wallet.</h2>";

		  $products['Computer']=750;
	    $products['Car']=15000;
	    $products['iPhone']=1000;
	    $products['Toaster']=75;

      $taxRate=0.0825;

      function tax_calc($amount,$tax){
	    	$addedTax = $amount*$tax;
	    	$amountWithTax = round($amount+$addedTax,2);
	    	return $amountWithTax;
    	}

	    foreach($products as $key => $value){
	    	$costWithTax = tax_calc($value,$taxRate);
		    echo "<p>The ".$key." costs ".$costWithTax." with tax</p>";
	    }

	    echo "<h2>Items you can afford</h2>";

	    foreach($products as $key => $value){
	    	$costWithTax = tax_calc($value,$taxRate);
		    if($costWithTax <= $credit ){
		    	echo "<p>".$key."</p>"; 
		    }
	    }
    ?>
  </body>
</html>
