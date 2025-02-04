<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phattrawadee Sriworakul (Ta)</title>
</head>

<body>
	<h1>Phattrawadee Sriworakul (Ta)</h1>
    
<form method="post" action="">
    score <input type="number" name="a" min="0" max="100" autofocus required>
    <button type="submit" name="Submit">OK</button>
</form>
<hr>
<?php
    // ตรวจสอบการส่งข้อมูลจากฟอร์ม
    if (isset($_POST['Submit'])){
        // รับค่าคะแนนจากฟอร์ม
        $score = $_POST['a'];
        
        // การกำหนดเกรดตามคะแนน
        if ($score >= 80) {
            $grade = "A";
        } else if ($score >= 70) {
            $grade = "B";
        } else if ($score >= 60) {
            $grade = "C";
        } else if ($score >= 50) {
            $grade = "D";
        } else {
            $grade = "F";
        }
        
        // แสดงผลคะแนนและเกรด
        echo "Score $score Get Grade $grade";
    }
?>

</body>
</html>