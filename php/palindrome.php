<?php

$a=121;
$s=0;
$t=$a;

    while($a!=0){
        $r=$a%10;
        $s=$s*10+$r;
        $a=intval($a/10);
    }
    if($s==$t){
        echo "Palindrome is: ".$s;
    }
    else{
        echo "Not palidrome";
    }
?>