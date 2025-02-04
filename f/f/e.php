<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phattrawadee Sriworakul (Ta)</title>
</head>

<body>
	<h1>Phattrawadee Sriworakul (Ta)</h1>
    
<form method="post" action="">
   Total Price <input type="number" name="a" min="0"autofocus required>
    <button type="submit" name="Submit">OK</button>
</form>
<hr>
<?php	
    if (isset($_POST['Submit'])){
        $price = $_POST['a'];
		$discount = 0;
        if ($price >= 5000) {
            $discount = 0.15*$price;
        } else if ($price >= 2000) {
			$discount = 0.1*$price;
        } else if ($price >= 1000) {
            $discount = 0.05*$price;
		}
	$net = $price - $discount;
	echo "Price: " . number_format($price, 0) . " Baht<br>";
    echo "Get Discount: " . number_format($discount, 0) . " Baht<br>";
    echo "Total Price: " . number_format($net, 0) . " Baht<br>";
	}?>
</body>
</html>