<?php

$arreglo = array('uno', 'dos', 'tres', 'cuatro', 'cinco');
foreach ($arreglo as $valor) {
    if ($valor == 'cuatro') {
        continue;
    }
    echo $valor, '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$i = 0;
while ($i++ < 5) {
    echo 'Exterior', '<br>';
    while (1) {
        echo 'Medio', '<br>';
        while (1) {
            echo 'Interior', '<br>', '<br>';
            continue 3;
        }
        echo 'Esto nunca se imprimirá.', '<br>';
    }
    echo 'Ni esto tampoco.', '<br>';
}
