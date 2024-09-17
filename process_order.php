<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
// ตรวจสอบว่ามีการส่งข้อมูลจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $product = $_POST['product'];
    $payment_method = $_POST['payment_method'];
    // กำหนดราคาสินค้าตามที่ผู้ใช้เลือก
    switch ($product) {
        case "Laptop":
            $price = 15000;
            echo "<div>คุณเลือกซื้อ Laptop ราคา: " . $price . " บาท</div>";
            break;
        case "Smartphone":
            $price = 10000;
            echo "<div>คุณเลือกซื้อ Smartphone ราคา: " . $price . " บาท</div>";
            break;
        case "Tablet":
            $price = 8000;
            echo "<div>คุณเลือกซื้อ Tablet ราคา: " . $price . " บาท</div>";
            break;
        default:
            echo "<div>สินค้าไม่มีในระบบ</div>";
            exit;
    }
    // วิธีการชำระเงิน
    if ($payment_method == "Credit Card") {
        echo "<div>วิธีการชำระเงิน: บัตรเครดิต</div>";
        echo "กำลังดำเนินการชำระเงินด้วยบัตรเครดิต...";
    } elseif ($payment_method == "Paypal") {
        echo "<div>วิธีการชำระเงิน: Paypal</div>";
        echo "กำลังดำเนินการชำระเงินด้วย Paypal...";
    } elseif ($payment_method == "Cash") {
        echo "<div>วิธีการชำระเงิน: เงินสด</div>";
        echo "กรุณาชำระเงินเมื่อรับสินค้า";
    } else {
        echo "วิธีการชำระเงินไม่ถูกต้อง";
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