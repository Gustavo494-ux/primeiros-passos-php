<?php

echo "Contador com while".PHP_EOL;
$contador = 1;
while ($contador <= 15){
    if ( $contador == 13){
        break;
    }
    echo "#$contador\n";
    $contador += 1;
}


for ($i=1; $i <= 15; $i++) { 
    if ( ($i % 2) == 0){
        continue;
    }
    echo "#$i\n";
}
