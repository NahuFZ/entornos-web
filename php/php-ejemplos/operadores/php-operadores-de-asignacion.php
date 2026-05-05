<?php

$a = ($b = 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.
echo $a, '<br>';
echo $b, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = 3;
$a += 5; // establece $a en 8, como si se hubiera dicho: $a = $a + 5;
echo $a, '<br>';

$b = "Hola ";
$b .= "ahí!"; // establece $b en "Hola ahí!", al igual que $b = $b . "ahí!";
echo $b, '<br>';

$a = 3;
$b = &$a; // $b es una referencia para $a
echo $a, '<br>'; // muestra 3
echo $b, '<br>'; // muestra 3

$a = 4; // cambia $a
echo $a, '<br>'; // muestra 4
echo $b, '<br>'; // muestra 4 también, dado que $b es una referencia para $a
