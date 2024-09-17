<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลือกสินค้าและวิธีการชำระเงิน</title>
</head>

<body>
    <h2>เลือกสินค้าและวิธีการชำระเงิน</h2>
    <form action="process_order.php" method="POST">
        <div>
            <label for="product">เลือกสินค้า:</label>
            <select name="product" id="product">
                <option value="Laptop">Laptop</option>
                <option value="Smartphone">Smartphone</option>
                <option value="Tablet">Tablet</option>
            </select>

        </div>
        <div>
            <label for="payment_method">เลือกวิธีการชำระเงิน:</label>
            <select name="payment_method" id="payment_method">
                <option value="Credit Card">Credit Card</option>
                <option value="Paypal">Paypal</option>
                <option value="Cash">Cash</option>
            </select>
        </div>
        <div>
            <input type="submit" value="สั่งซื้อ">
        </div>
    </form>
</body>

</html>