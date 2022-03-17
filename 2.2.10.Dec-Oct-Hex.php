<?php

$a = explode(" ", readline());

$wielkosc=sizeof($a);

$b = [];

for($i=0;$i<$wielkosc;++$i){
    $b[$i]=octdec($a[$i]);
}

for ($i=0;$i<$wielkosc;++$i){
    printf("0x%x ", $b[$i]);
}

?>