<?php

$a = 1.234;
$b = 1.2e3;
$c = 7E-2;
$d = 1_234.567; // PHP 7.4.0

echo $a, '<br>';
echo $b, '<br>';
echo $c, '<br>';
echo $d, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$x = 8 - 6.4;
$y = 1.6;

var_dump($x == $y); // false
echo '<br>';
var_dump($x);
echo '<br>';
var_dump(round($x, 2) == round($y, 2)); // true

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo PHP_FLOAT_MAX, '<br>'; // el mayor número de punto flotante representable
echo PHP_FLOAT_MIN, '<br>'; // el menor número de punto flotante representable
