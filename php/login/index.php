<?php

session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
}
?>

    
    <h1>Hey! welcome to main page.</h1>
    <a href="page1.php"><h2><font color="green">PAGE 1</font></h2></a>
    <a href="page2.php"><h2><font color="green">PAGE 2</font></h2></a>
    <a href="page3.php"><h2><font color="green">PAGE 3</font></h2></a>
    

    <a href="logout.php"><h2><font color="red">Logout</font></h2></a>
