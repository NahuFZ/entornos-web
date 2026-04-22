<?php

$array = array('a', 'b', 'c', 'd');
foreach ($array as $valor) {
    echo $valor, '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$array = array('a', 'b', 'c', 'd');
foreach ($array as $clave => $valor) {
    echo $clave, ': ', $valor, '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
echo var_dump($array) . '<br>';
unset($valor);  // rompe la referencia con el último elemento
echo var_dump($array) . '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Sintaxis alternativa
$array = array('a', 'b', 'c', 'd');
foreach ($array as $valor) :
    echo $valor, '<br>';
endforeach;
