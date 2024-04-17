<?php
session_start();

$servername = "localhost";  // เปลี่ยนเซิร์ฟเวอร์ MySQL ตามที่คุณใช้
$username = "root";         // ชื่อผู้ใช้ MySQL
$password = "";             // รหัสผ่าน MySQL
$dbname = "test";           // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่าฟอร์มถูกส่งมาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_user = htmlspecialchars($_POST['user']);
    $input_pass1 = htmlspecialchars($_POST['pass1']);
    
    

    // ใช้คำสั่ง prepared statement เพื่อป้องกันการโจมตี SQL injection
    $stmt = $conn->prepare("SELECT id, user, pass1 FROM log WHERE user = ? AND pass1 = ?");
    $stmt->bind_param("ss", $input_user, $input_pass1, );
    $stmt->execute();
    $stmt->store_result();

    // ตรวจสอบว่ามีข้อมูลตรงกับเงื่อนไขหรือไม่
    if ($stmt->num_rows > 0) {
        // ดึงข้อมูลผู้ใช้
        $stmt->bind_result($id, $user, $pass1);
        $stmt->fetch();
    
        // เก็บข้อมูลผู้ใช้ในตัวแปร session
        $_SESSION['id'] = $id;
        $_SESSION['user'] = $user;
    
        // ส่งไปยังหน้า tt.php
        header("Location: tt.php");
        exit();
    } else {
        // ล็อกอินไม่สำเร็จ
        header("Location: pp.php");
        exit();
    }
    // ปิด statement
    $stmt->close();
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
