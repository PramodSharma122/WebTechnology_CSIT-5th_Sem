<?php
include("connectioncheck.php");
$sql="CREATE TABLE students(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT Null,
email VARCHAR(50)
)";

if(mysqli_query($conn,$sql)){
    echo "Table Created successfully";
}
else{
    echo "Error creating table: ".mysqli_error($conn);
}
?>