<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" name="day" id="day" min="1" max="7">
        <input type="submit" value="OK">
    </form>


    <?php
if(isset($_REQUEST['day'])){
    switch($_REQUEST['day']){
        case 1: echo "สวัสดีวันจันทร์";break;
        case 2: echo "สวัสดีวันอังคาร";break;
        case 3: echo "สวัสดีวันพุธ";break;
        case 4: echo "สวัสดีวันพฤหัสบดี";break;
        case 5: echo "สวัสดีวันศุกร์";break;
        case 6: echo "สวัสดีวันเสาร์";break;
        case 7: echo "สวัสดีวันอาทิตย์";break;
        default:echo "วันที่ไม่ถูกต้อง";

    }
}
?>



</body>

</html>