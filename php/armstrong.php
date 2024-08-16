<?php
$a=1634;
$b=strlen($a);
$t=$a;
$s=0;
while($a!=0){
    $r=$a%10;
    $s=$s+pow($r,$b);
    $a=intval($a/10);
}
if($t==$s){
    echo "Armstrong number";
}
else{
    echo "Not Armstrong number";
}
?>