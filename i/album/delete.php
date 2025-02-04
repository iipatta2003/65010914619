<meta charset="utf-8">
<?php
if (!empty($_GET['id']) && !empty($_GET['ext'])) {
    include_once("../connectdb.php"); // เชื่อมต่อฐานข้อมูล
    $id = intval($_GET['id']); // กรองค่า id เป็นจำนวนเต็ม
    $ext = htmlspecialchars($_GET['ext']); // กรองค่า ext เพื่อความปลอดภัย

    // สร้างคำสั่ง SQL
    $sql = "DELETE FROM `products` WHERE `p_id` = $id";

    // ดำเนินการลบข้อมูลในฐานข้อมูล
    if (mysqli_query($conn, $sql)) {
        // ตรวจสอบและลบไฟล์ภาพ
        $filePath = "../images/$id.$ext";
        if (file_exists($filePath)) {
            unlink($filePath); // ลบไฟล์ภาพ
        }

        // แสดงข้อความสำเร็จและเปลี่ยนเส้นทาง
        echo "<script>";
        echo "alert('Product deleted successfully!');";
        echo "window.location='index.php';";
        echo "</script>";
    } else {
        // แสดงข้อผิดพลาดหากลบไม่สำเร็จ
        echo "<script>";
        echo "alert('Delete error: " . mysqli_error($conn) . "');";
        echo "window.location='index.php';";
        echo "</script>";
    }

    mysqli_close($conn); // ปิดการเชื่อมต่อฐานข้อมูล
} else {
    // กรณีที่ไม่มี id หรือ ext
    echo "<script>";
    echo "alert('Invalid request!');";
    echo "window.location='index.php';";
    echo "</script>";
}
?>
