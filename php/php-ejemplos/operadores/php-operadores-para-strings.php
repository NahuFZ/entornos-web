<?php

$a = "Hello ";
$b = $a . "World!"; // ahora $b contiene "Hello World!"
echo $b, '<br>';

$a = "Hello ";
$a .= "World!";     // ahora $a contiene "Hello World!"
echo $a, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$var = 3;
echo 'Resultado: ' . $var + 3, '<br>'; // PHP 7 Warning
echo 'Resultado: ' . ($var + 3), '<br>';
echo 'Resultado: ', $var + 3, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(1 . 2), '<br>';   // string "12"
echo var_dump(1.2), '<br>';     // float 1.2
