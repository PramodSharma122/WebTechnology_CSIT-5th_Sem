<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:#FF0001;}
    </style>
</head>
<body>
    <?php
    $nameErr=$emailErr=$mobilenoErr=$genderErr=$websiteErr=$agreeErr="";
    $name=$email=$mobileno=$gender=$website=$agree="";

    // input fields validation
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        // string validation
        if(empty($_POST["name"])){
            $nameErr="Name is Required";
        }
        else{
            $name=input_data($_POST["name"]);

            // check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $nameErr="Only alphabets and white space are allowed";
            }
        }

        // Email validation
        if(empty($_POST["email"])){
            $emailErr="Email is required";
        }
        else{
            $email=input_data($_POST["email"]);

            // Check that the email address is well-formed
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="Invalid email format";
            }
        }

        // mobile number validation
        if(empty($_POST["mobileno"])){
            $mobilenoErr="Mobile number is required";
        }
        else{
            $mobileno=input_data($_POST["mobileno"]);

            // check that the mobile number is well-formed
            if(!preg_match ("/^[0-9]*$/",$mobileno)){
                $mobilenoErr="Only numeric value is allowed.";
            }

            // check mobile no length should not be less and greater than 10
            if(strlen($mobileno)!=10){
                $mobilenoErr="Mobile no must contain 10 digits.";
            }
            
        }

        if(empty($_POST["website"])){
            $website="";
        }
        else{
            $website=input_data($_POST["website"]);

            // check if url address syntax is valid
            if(!filter_var($website,FILTER_VALIDATE_URL)){
                $websiteErr="Invalid URL";
            }
        }

        // Empty Field validation
        if(empty($_POST["gender"])){
            $genderErr="Gender is required";
        }
        else{
            $gender=input_data($_POST["gender"]);
        }

        // checkbox validation
        if(!isset($_POST["agree"])){
            $agreeErr="Accept terms of services before submit.";
        }
        else{
            $agree=input_data($_POST["agree"]);
        }
    }

    function input_data($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Registration Form</h2>
    <span class="error">* required field</span>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:
        <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        Email:
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        Mobile No:
        <input type="number" name="mobileno">
        <span class="error">* <?php echo $mobilenoErr; ?></span>
        <br><br>

        Website:
        <input type="text" name="website">
        <span class="error">* <?php echo $websiteErr; ?></span>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>

        Agree to terms of services:
        <input type="checkbox" name="agree">
        <span class="error">* <?php echo $agreeErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>

    
    
</body>
</html>