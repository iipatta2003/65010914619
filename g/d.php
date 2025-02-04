<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>Phattrawadee Sriworakul(Ta)</h1>
    
<form method="post" action="">
    Number <input type="number" min="1" max="1000" name="a" required autofocus>
    <button type="submit" name="Submit">Submit</button>
</form><hr>

<?php
if(isset($_POST['Submit'])){
    $count = $_POST['a'];
    echo "แสดงจำนวน $count รูป <br><br>";
    for ($i = 1; $i <= $count; $i++) {
        // Display the image
        echo '<img src="santa.jpg" width="250" alt="Santa Image" />';
    }
}
?>

</body>
</html>