<!-- smallest number among 3 number using nested if -->

<?php
$a=7;
$b=9;
$c=8;

if($a>$b){
    if($c>$b){
        echo $b." is smallest ";
    }
    else{
        echo $c." is smallest ";
    }
}
elseif($b>$a){
    if($c>$a){
        echo $a." is smallest ";
    }
    else{
        echo $c." is smallest ";
    }
}
?>