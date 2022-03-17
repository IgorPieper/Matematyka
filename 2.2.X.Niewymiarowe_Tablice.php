<?php

$a = explode(" ", readline());
$b = explode(" ", readline());

$wielkosca=sizeof($a);
$wielkoscb=sizeof($b);

$c = [];

if($wielkosca>$wielkoscb){
    $d = array_pad($b, $wielkosca, 0);

    for($i=0;$i<$wielkosca;++$i){
        $c[$i]=$a[$i]+$d[$i];
    }
} else if($wielkoscb>$wielkosca){
    $d = array_pad($a, $wielkoscb, 0);

    for($i=0;$i<$wielkoscb;++$i){
        $c[$i]=$d[$i]+$b[$i];
    }
}

foreach ($c as $x){
    echo "$x ";
}

?>
