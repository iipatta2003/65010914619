<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phattrawadee Sriworakul(Ta)</title>
</head>

<body>
    <h1>Phattrawadee Sriworakul (Ta)</h1>
    <form method="post" action="">
        รหัสนิสิต: <input type="text" name="a" required autofocus>
        <button type="submit" name="Submit">OK</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['Submit'])) {
        $std = $_POST['a'];  // รับค่ารหัสนิสิตจากฟอร์ม
        $y = substr($std, 0, 2);  // เอาสองหลักแรกของรหัสนิสิต
        echo "<img src='http://202.28.32.211/picture/student/{$y}/{$std}.jpg' width='500'>";  // แสดงรูปภาพตามรหัสนิสิต
    }
    ?>
</body>

</body>
</html>