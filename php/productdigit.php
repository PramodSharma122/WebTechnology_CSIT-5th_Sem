<?php

$a=7536;
$s=1;

while($a!=0){
    $r=$a%10;
    $s=$s*$r;
    $a=intval($a/10);
}
echo "product of digits is: ".$s;
?>