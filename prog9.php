<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prog9.php" method="post">
        Enter first Value : <input type="text" name="v1"><br>
        <input type="submit" Value="submit">
    </form>
    <?php
        $v1=$_POST['v1'];
        for($i=1 ; $i<=10 ; $i++)
        echo $v1 . "X" . $i . "=" . ($v1*$i) . "<br>";
    ?>
</body>
</html>