<?php
$c=0;
$a=7;
for($i=2;$i<=$a-1;$i++){
    if($a%$i==0){
        $c=$c+$i;
        break;
    }
}
if($c==0 && $a>1){
    echo "Prime Number";
}
else{
    echo "Composite Number";
}
?>