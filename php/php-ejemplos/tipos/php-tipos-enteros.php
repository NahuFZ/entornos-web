<?php

$a = 1234;        // número decimal
$a = -123;        // número negativo
$a = 0123;        // número octal (equivalente a 83 decimal)
$a = 0x1A;        // número hexadecimal (equivalente a 26 decimal)
$a = 0b11111111;  // número binario (equivale al 255 decimal)
$a = 1_234_567;   // número decimal (PHP 7.4.0)
echo $a;

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo PHP_INT_MAX, '<br>'; // el número entero más grande admitido en esta compilación de PHP
echo PHP_INT_MIN, '<br>'; // el número entero más pequeño admitido en esta compilación de PHP

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// En algunas plataformas el tamaño máximo del integer puede ser 2147483647

$large_number = 2147483647;
var_dump($large_number);              // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);              // float(2147483648)

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

var_dump(25 / 7);         // float(3.5714285714286)
var_dump((int)(25 / 7));  // int(3)
var_dump(round(25 / 7));  // float(4)
