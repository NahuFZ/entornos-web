<?php

/*
++$a  Pre-incremento  Incrementa $a en uno, y luego retorna $a.
$a++  Post-incremento Retorna $a, y luego incrementa $a en uno.
--$a  Pre-decremento  Decrementa $a en uno, luego retorna $a.
$a--  Post-decremento Retorna $a, luego decrementa $a en uno.
*/

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = 5;
echo 'Debe ser 5: ', $a++, '<br>';
echo 'Debe ser 6: ', $a, '<br>';

$a = 5;
echo 'Debe ser 6: ', ++$a, '<br>';
echo 'Debe ser 6: ', $a, '<br>';

$a = 5;
echo 'Debe ser 5: ', $a--, '<br>';
echo 'Debe ser 4: ', $a, '<br>';

$a = 5;
echo 'Debe ser 4: ', --$a, '<br>';
echo 'Debe ser 4: ', $a, '<br>';
