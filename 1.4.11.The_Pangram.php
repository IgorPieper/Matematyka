<?php

$zdanie = readline();
$dlugosc = strlen($zdanie);

$litera[0] = "a";
$litera[1] = "b";
$litera[2] = "c";
$litera[3] = "d";
$litera[4] = "e";
$litera[5] = "f";
$litera[6] = "g";
$litera[7] = "h";
$litera[8] = "i";
$litera[9] = "j";
$litera[10] = "k";
$litera[11] = "l";
$litera[12] = "m";
$litera[13] = "n";
$litera[14] = "o";
$litera[15] = "p";
$litera[16] = "q";
$litera[17] = "r";
$litera[18] = "s";
$litera[19] = "t";
$litera[20] = "u";
$litera[21] = "v";
$litera[22] = "w";
$litera[23] = "x";
$litera[24] = "y";
$litera[25] = "z";

$litera2[0] = "A";
$litera2[1] = "B";
$litera2[2] = "C";
$litera2[3] = "D";
$litera2[4] = "E";
$litera2[5] = "F";
$litera2[6] = "G";
$litera2[7] = "H";
$litera2[8] = "I";
$litera2[9] = "J";
$litera2[10] = "K";
$litera2[11] = "L";
$litera2[12] = "M";
$litera2[13] = "N";
$litera2[14] = "O";
$litera2[15] = "P";
$litera2[16] = "Q";
$litera2[17] = "R";
$litera2[18] = "S";
$litera2[19] = "T";
$litera2[20] = "U";
$litera2[21] = "V";
$litera2[22] = "W";
$litera2[23] = "X";
$litera2[24] = "Y";
$litera2[25] = "Z";

$jest[0] = 0;
$jest[1] = 0;
$jest[2] = 0;
$jest[3] = 0;
$jest[4] = 0;
$jest[5] = 0;
$jest[6] = 0;
$jest[7] = 0;
$jest[8] = 0;
$jest[9] = 0;
$jest[10] = 0;
$jest[11] = 0;
$jest[12] = 0;
$jest[13] = 0;
$jest[14] = 0;
$jest[15] = 0;
$jest[16] = 0;
$jest[17] = 0;
$jest[18] = 0;
$jest[19] = 0;
$jest[20] = 0;
$jest[21] = 0;
$jest[22] = 0;
$jest[23] = 0;
$jest[24] = 0;
$jest[25] = 0;

$wynik=0;

for($i=0;$i!=$dlugosc;$i++){

    for($ii=0;$ii<=25;$ii++){
        if(($zdanie[$i]==$litera[$ii] || $zdanie[$i]==$litera2[$ii]) && $jest[$ii]<1){
            $jest[$ii]++;
        }
    }
}

for($i=0;$i!=26;$i++){
    if($jest[$i]==1){
        $wynik++;
    }
}

if($wynik==26){
    echo "true";
} else{
    echo "false";
}

?>
