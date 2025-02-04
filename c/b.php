<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phattrawadee Sriworakul(Ta)</title>
</head>

<body>
	<h1>Phattrawadee Sriworakul(Ta</h1>
    
    <form Method="post" action="">
Number 
	<input type="number" name="a"  min="1" max="100" required autofocus >
    <br><br>
Name
	<input type"text" name="b" required>
    <br><br>    
Province
	<select name ="province"
    <option value="Chonburi">Chonburi</option>
    <option value="Sakolnakhon">Sakolnakhon</option>
    <option value="Roiet">Roiet</option>
    <option value="Loei">Loei</option></select>
<br><br>
Date of Birth
	<input type="Date" name="Birthday"
    <br><br>
    <button type="Submit">Submit</button>

    </form>
<hr>

<?php
echo @$_POST['a']."<br>";
echo @$_POST['b']."<br>";
echo @$_POST['province']."<br>";
echo @$_POST['Birthday']."<br>";
?>
</body>
</html>