<?php
if(isset($_POST['submit'])){
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $sum=$number1+$number2;

    echo "The sum of two number is: ".$sum;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter First Number:
        <input type="number" name="number1"><br><br>
        Enter Second Number:
        <input type="number" name="number2"><br><br>
        <input type="submit" name="submit" value="Add">
    </form>
    
</body>
</html>