<?php
// start session in every single page

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo 'Welcome:'.$_SESSION["username"].'<br>';
echo 'Your name is:'.$_SESSION["name"].'<br>';
echo 'Your department is:'.$_SESSION["dept"].'<br>';
?>
</body>
</html>