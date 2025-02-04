<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phattrawadee Sriworakul Ta</title>
</head>

<body>
	<h1> insert product Form </h1>
<form method = "post" action="">
    Product Name <input type="text" name="pname" required autofocus <br>
    Product Price <input type="text" name="pprice" required <br>
    <button type="submit">Save</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	include_once("../connectdb.php");
	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$sql = "INSERT INTO products (p_name, p_price) VALUES ('{$pname}','{$pprice}')";
	mysqli_query($conn, $sql) or die ('insert error');
	
	echo "<script>";
	echo "alert('success!');";
	echo "</script>";
	
}
?>
</body>
</html>