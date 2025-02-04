<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phattrawadee Sriworakul(Ta)</title>
</head>

<body>
<h1>สมัครสมาชิกชมรมปั้นดินเหนียว</h1>
 <form Method="post" action="">
ชื่อ-สกุล
  <input type="text" name="inName" required>
    <br><br>    
เพศ 
	<input Type ="radio" name="inSex" value="ชาย"Checked>ชาย
    <input Type ="radio" name="inSex" value="หญิง">หญิง
    <br><br>
ที่อยู่
<br>
    <textarea name="inAddress" cols="30" Rows="4" > </textarea>
    <br><br>
เบอร์โทร
	<input type="text" name="inTell"  required >
ระดับการศึกษา
	<select name ="inEduacation"
    <option value="ประถมศึกษา">ประถมศึกษา</option>
    <option value="มัธยมต้น">มัธยมต้น</option>
    <option value="มัธยมปลาย">มัธยมปลาย</option>
    <option value="ปริญญาตรีขึ้นไป">ปริญญาตรีขึ้นไป</option></select>
	<br><br>
อาหารที่ชอบ
	<input Type ="Checkbox" name="F[]" value="ข้าวราดแกง"/>ข้าวราดแกง
    <input Type ="Checkbox" name="F[]" value="ฟาสต์ฟู้ด"/>ฟาสต์ฟู้ด
    <input Type ="Checkbox" name="F[]" value="ของหวาน"/>ของหวาน
    <input Type ="Checkbox" name="F[]" value="ของทอด"/>ของทอด
    <br><br>
Username
	<input name="inUsername"type="text" id="username"/>
    <br><br>
   
Password
	<input name = "inPassword" ttype="password" id="inPasswors"/>
<br><br>
<Button type="Submit" name="Submit">สมัครสมาชิก</Button>
<Button type="reset">ยกเลิก</Button>
<Button type="button" onClick="window.print(); ">พิมพ์หน้านี้</Button>
</Form>
<hr>

<?php
if(isset($_POST['Submit'])){
	echo"ชื่อ:".$_POST['inName']."<br>";
	echo"เพศ:".$_POST['inSex']."<br>";
	echo"เบอร์โทรศัพท์:".$_POST['inTell']."<br>";
	echo"ระดับการศึกษา:".$_POST['inEduacation']."<br>";
	echo"อาหารที่ชอบ :" ;
	if (isset($_POST['F'])) {
	foreach ( $_POST['F'] as $food ) {
			echo "<li>". htmlspecialchars($food). "</li>" ;
		}
	}

	echo"Username:".$_POST['inUsername']."<br>";
	echo"Password:".$_POST['inPassword']."<br>";
}
?>
</body>
</html>