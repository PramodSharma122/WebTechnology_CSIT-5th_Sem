<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    // set three session global variables

    $_SESSION["username"]="admin";
    $_SESSION["name"]="Pramod";
    $_SESSION["dept"]="IT";
    
    ?>
</body>
</html>