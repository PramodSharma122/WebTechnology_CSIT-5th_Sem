<?php

$a=7536;
$s=0;

while($a!=0){
    $r=$a%10;
    $s=$s+$r;
    $a=$a/10;
}
echo "sum of digits is: ".$s;
?>