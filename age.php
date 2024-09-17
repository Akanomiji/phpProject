<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบช่วงอายุ</title>
</head>

<body>
    <h2>กรุณากรอกอายุของคุณ</h2>
    <form action="age.php" method="POST">
        <label for="age">อายุ:</label>
        <input type="number" name="age" id="age" min="0" max="150" required>
        <input type="submit" value="ตรวจสอบวัย">
    </form>
    <?php
// ตรวจสอบว่ามีการส่งข้อมูลจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าอายุจากฟอร์ม
    $age = $_POST['age'];

    // ตรวจสอบช่วงอายุและแสดงผลด้วย switch case
    switch (true) {
        case ($age >= 0 && $age <= 12):
            echo "คุณอยู่ในวัยเด็ก";
            break;
        case ($age >= 13 && $age <= 19):
            echo "คุณอยู่ในวัยรุ่น";
            break;
        case ($age >= 20 && $age <= 35):
            echo "คุณอยู่ในวัยผู้ใหญ่ตอนต้น";
            break;
        case ($age >= 36 && $age <= 59):
            echo "คุณอยู่ในวัยผู้ใหญ่ตอนกลาง";
            break;
        case ($age >= 60):
            echo "คุณอยู่ในวัยสูงอายุ";
            break;
        default:
            echo "อายุไม่ถูกต้อง";
            break;
    }
} else {
    echo "ไม่มีข้อมูลส่งจากฟอร์ม";
}
?>
    <div>
        <button type="button" onclick="history.back()">กลับหน้าหลัก</button>
    </div>

</body>

</html>