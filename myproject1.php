<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="">
        <input type="text" name="name" id="name">
        <input type="text" name="lname" id="lname">
        <input type="submit" value="OK">
    </form>
    <?php
        $name = "Chinkorn Katib";
        
        print "<h1>$name</h1>";
        print $_GET["name"];
        print $_GET["lname"];
    ?>
</body>

</html>