<?php

$i = 1;
switch ($i) {
    case 0:
        echo 'i es igual a 0', '<br>';
        break;
    case 1:
        echo 'i es igual a 1', '<br>';
        break;
    case 2:
        echo 'i es igual a 2', '<br>';
        break;
}

if ($i == 0) {
    echo 'i es igual a 0', '<br>';
} elseif ($i == 1) {
    echo 'i es igual a 1', '<br>';
} elseif ($i == 2) {
    echo 'i es igual a 2', '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$i = 'pastel';
switch ($i) {
    case 'manzana':
        echo 'i es una manzana', '<br>';
        break;
    case 'barra':
        echo 'i es una barra', '<br>';
        break;
    case 'pastel':
        echo 'i es un pastel', '<br>';
        break;
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$i = 1;
switch ($i) {
    case 0:
        echo 'i es igual a 0', '<br>';
        // no break
    case 1:
        echo 'i es igual a 1', '<br>';
        // no break
    case 2:
        echo 'i es igual a 2', '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$i = 0;
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo 'i es menor que 3 pero no negativo', '<br>';
        break;
    case 3:
        echo 'i es 3', '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$i = 0;
switch ($i) {
    case 0:
        echo 'i es igual a 0', '<br>';
        break;
    case 1:
        echo 'i es igual a 1', '<br>';
        break;
    case 2:
        echo 'i es igual a 2', '<br>';
        break;
    default:
        echo 'i no es igual a 0, 1 ni 2', '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Sintaxis alternativa
$i = 0;
switch ($i) :
    case 0:
        echo 'i es igual a 0';
        break;
    case 1:
        echo 'i es igual a 1';
        break;
    case 2:
        echo 'i es igual a 2';
        break;
    default:
        echo 'i no es igual a 0, 1 ni 2';
endswitch;
