<?php

    $a = explode(" ", readline());

    $gdzie = readline();

    if($gdzie<0 || $gdzie>sizeof($a)){
        echo "BŁĄD";
    }else{
        array_splice($a, $gdzie, 0, "$");
        foreach($a as $x){
            echo "$x ";
        }
    }

?>
