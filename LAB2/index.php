<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="wapper">
        <?php
            require_once("userclass.php");
            $nguyenanh=new User('nguyen anh','dinhanhvnn@gmail.com');
            echo "<h2>-----User Inform-----</h2>";
            echo "UserID:" .$nguyenanh=GetUserID()."</br>";
        ?>
    </div>
</body>
</html>