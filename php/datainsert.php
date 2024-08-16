<?php
include("connectioncheck.php");
$sql="INSERT INTO students(firstname,lastname,email)
VALUES('Pramod','Sharma','pramodsharma@gmail.com')";

if(mysqli_query($conn,$sql)){
    echo "New record Created successfully";
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>