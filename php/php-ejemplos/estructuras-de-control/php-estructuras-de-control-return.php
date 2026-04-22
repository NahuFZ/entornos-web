<?php

function funcionUno()
{
    return;
}
echo var_dump(funcionUno()), '<br>';

function funcionDos()
{
    return 'Mi mensaje.';
}
echo var_dump(funcionDos()), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$resultado = include 'php-estructuras-de-control-return-otro-script.php';

echo 'Resultado: ', $resultado, '<br>';

echo 'Finaliza desde "Script principal".', '<br>';
