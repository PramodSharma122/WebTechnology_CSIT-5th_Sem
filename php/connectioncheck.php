<?php
$servername="localhost";
$username="root";
$password="";
$dbname="csit5th";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully <br><br>";
?>