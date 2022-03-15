<?php

    $a = explode(",", readline());

    $suma = 0;

    foreach ($a as $x){
        $suma+=$x;
    }
    $wielkosc=sizeof($a);
    $srednia=$suma/$wielkosc;

    printf("%.2f", $srednia);
    $b = array_unique($a);
    sort($b);

    echo "\n$b[0] $b[1] $b[2] $b[3] $b[4]";
    rsort($b);
    echo "\n$b[4] $b[3] $b[2] $b[1] $b[0]";

?>