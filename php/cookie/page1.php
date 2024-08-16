<?php

if(!isset($_COOKIE["login"]))
    header("location:login.php");
?>

<h1>Welcome to page 1</h1>
<div>
    <button><a href="index.php">Main Page</a></button>
</div>
<a href="page1.php"><h2>PAGE 1</h2></a>
<a href="page2.php"><h2><font color="green">PAGE 2</font></h2></a>
<a href="page3.php"><h2><font color="green">PAGE 3</font></h2></a>



<a href="logout.php"><h2><font color="red">Logout</font></h2></a>