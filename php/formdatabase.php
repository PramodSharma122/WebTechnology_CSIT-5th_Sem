<?php
include("connectioncheck.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        First Name: <input type="text" name="fname"><br><br>
        Last Name: <input type="text" name="lname"><br><br>
        Email: <input type="email" name="email"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $sql="INSERT INTO students(firstname,lastname,email)
        VALUES('$fname','$lname','$email')";
        if(mysqli_query($conn,$sql)){
            echo "<br> Registration successfully.";
        }
        else{
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
        }
    }
    ?>
</body>
</html>