<?php
$sp=1000;
$cp=200;
$p=$sp-$cp;
$l=$cp-$sp;

if($sp<$cp){
    echo "Loss ".$l;
}
else{
    echo "Profit ".$p;
}
?>