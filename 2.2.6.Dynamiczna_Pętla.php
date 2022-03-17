<?php

$ile = readline();

$tak = [];
for($i=0;$i<$ile;++$i){
    fscanf(STDIN, "%s %s %s", $a[0], $a[1], $a[2]);
    rsort($a);
    $tak[$i]="$a[0]";
    unset($a[0]);unset($a[1]);unset($a[2]);
}

foreach ($tak as $x) {
    echo "$x\n";
}

?>