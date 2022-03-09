<?php

while(true){
    $n = readline();

    if($n>0){
        break;
    }

}

if($n==1){
    echo "*\n";
    echo "*\n";
    echo "*\n";
    echo "*";
}else {

    $zakres = 1;
    $powtorz = 1;
    $turnpoint = 1;

    for ($i = 0; $i < ($n * 2); $i++) {
        for ($ii = 0; $ii < $zakres; $ii++) {
            echo "*";
        }
        if ($zakres < $n && $turnpoint == 1) {
            $zakres++;
        } else if ($powtorz == 1) {
            $powtorz--;
            $turnpoint = 0;
        } else {
            $zakres--;
        }
        echo "\n";
    }

    $zakres = $n;
    $zakres2 = $n;
    $powtorz = 1;

    for ($i = 0; $i < ($n * 2); $i++) {

        for ($zakres2 = $n; $zakres2 != $zakres; $zakres2--) {
            echo " ";
        }

        for ($ii = 0; $ii < $zakres; $ii++) {
            echo "*";

        }
        if ($zakres == $n) {
            $zakres--;
        } else if ($zakres != $n && $powtorz == 1) {
            if ($zakres == 1) {
                $powtorz = 0;
            } else {
                $zakres--;
            }
        } else {
            $zakres++;
        }

        echo "\n";
    }

}

?>