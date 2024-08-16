<?php
function checkOddEven($number){
    if($number%2==0){
        return "Even";
    }
    else{
        return "Odd";
    }
}
$number=23;
$result=checkOddEven($number);
echo "The number $number is $result.";
?>