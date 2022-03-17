<?php

$a = explode(" ", readline());
$b = explode(" ", readline());

$wielkosca=sizeof($a);
$wielkoscb=sizeof($b);

$c = $a;

for($i=0; $i<$wielkoscb;++$i){
    $c[$i+$wielkosca]=$b[$i];
}

$d = array_unique($c);
sort($d);
foreach ($d as $x) {
    echo "$x ";
}

?>
