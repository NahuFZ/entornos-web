<?php

/*
+$a         Identidad       Conversión de $a a int o float según el caso.
-$a         Negación        Opuesto de $a.
$a + $b     Adición         Suma de $a y $b.
$a - $b     Sustracción     Diferencia de $a y $b.
$a * $b     Multiplicación  Producto de $a y $b.
$a / $b     División        Cociente de $a y $b.
$a % $b     Módulo          Resto de $a dividido por $b.
$a ** $b    Exponenciación  Resultado de elevar $a a la potencia $bésima. Introducido en PHP 5.6.
*/

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = '1';
echo var_dump(+$a), '<br>'; // int(1)

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = '1';
echo var_dump(-$a), '<br>'; // int(-1)

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(0 * INF), '<br>'; // float(NAN)

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(10 / 3), '<br>'; // float(3.3333333333333)
// echo var_dump(1 / 0), '<br>';  // float(INF)  (PHP >= 8 Error fatal)

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(10 % 3), '<br>'; // int(1)

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(2 ** 4), '<br>'; // int(16)
