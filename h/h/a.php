<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Brick Built</title>
</head>

<body>
	<h1>ร้านขายอิฐมอฐ/อิฐก่อสร้าง</h1>
   
<?php
include_once("connectdb.php"); // เชื่อมต่อฐานข้อมูล
$host = "localhost";
$user = "root";
$pwd = "";
$db = "shop";

$conn = mysqli_connect($host,$user,$pwd) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_select_db($conn,$db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "set names utf8");

$sql = "SELECT * FROM `products` ORDER BY `products`.`p_id` ASC";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)){
	$img = $data['p_id'].".".$data['p_ext'];
	echo "<img src = 'image/{$img}' width = '240'> <br>";
	echo "รหัสสินค้า: ".$data ['p_id']."<br>";
	echo "ชื่อสินค้า: ".$data ['p_name']."<br>";
	echo "รายละเอียดสินค้า: ".$data ['p_detail']."<br>";
	echo "ราคา/ก้อน: ".$data ['p_price']." ฿ <br>";
}
mysqli_close($conn);
?>
</body>
</html>
