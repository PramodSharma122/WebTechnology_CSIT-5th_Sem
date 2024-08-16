<?php
include("connectioncheck.php");
$sql="UPDATE students SET firstname='Anush',lastname='Adhikari' WHERE id=1";

if(mysqli_query($conn,$sql)){
    echo "<br> Record Updated successfully";
}
else{
    echo "Error updating record: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>