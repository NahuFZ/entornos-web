<?php

$arreglo = array('uno', 'dos', 'tres', 'cuatro', 'cinco');
foreach ($arreglo as $valor) {
    if ($valor == 'cuatro') {
        break;
    }
    echo $valor, '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$i = 0;
while (++$i) {
    switch ($i) {
        case 3:
            echo 'En 3', '<br>';
            break;  // Sólo sale del switch.
        case 5:
            echo 'En 5', '<br>';
            break 1;  // Sólo sale del switch.
        case 10:
            echo 'En 10; saliendo', '<br>';
            break 2;  // Sale del switch y del while.
        default:
            break;
    }
}
