<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phattrawadee Sriworakul (Ta)</title>
</head>

<body>
	<h1>Phattrawadee Sriworakul (Ta)</h1>
    
<?php
	$Student1 = 75;
	$Student2 = 60;
	$Student3 = 82;
	$Student4 = 59;
	$Student5 = 64;
	
	$sum = $Student1 + $Student2 + $Student3 + $Student4 + $Student5;
	$average = $sum/5 ;
	
	echo "Student 1 gets points {$Student1} <br>";
	echo "Student 2 gets points {$Student1} <br>";
	echo "Student 3 gets points {$Student1} <br>";
	echo "Student 4 gets points {$Student1} <br>";
	echo "Student 5 gets points {$Student1} <br>";
	echo "Totalscore: " . ($sum)."<br>";
	echo "Averagescore: ".($average)."<br>";
?>
</body>
</html>