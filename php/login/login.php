<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <fieldset>
            <legend>Login </legend>
            <form action="loginprocess.php" method="POST"><br><br>

            Username: <input type="text" required name="uname"><br><br>
            Password: <input type="text" required name="upassword"><br><br>
            <input type="submit" value="Login" name="sub">
            <br>

            <?php
            if(isset($_REQUEST["err"]))
                $msg="Invalid username or password";
            ?>
            <p style="color:red;">
                <?php
                if(isset($msg)){
                    echo $msg;
                }
                ?>
            </p>

            </form>
        </fieldset>
    </center>
</body>
</html>