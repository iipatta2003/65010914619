<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$pwd = "qq123456";
$db = "shop4619";

$conn = mysqli_connect($host,$user,$pwd) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_select_db($conn,$db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "set names utf8");
?>
</body>
</html>