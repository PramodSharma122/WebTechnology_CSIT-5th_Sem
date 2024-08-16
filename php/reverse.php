<?php
$a=1234;
$s=0;

    while($a!=0){
        $r=$a%10;
        $s=$s*10+$r;
        $a=intval($a/10);
    }
    echo "Reverse is: ".$s;
    
?>