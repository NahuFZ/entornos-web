<?php

$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo $a, '<br>';

// $a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2 (PHP >= 8 Error fatal)
// echo $a, '<br>';

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo $a, '<br>';
echo $b, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$x = 4;
// Esta línea podría resultar en una salida inesperada para PHP < 8
echo 'x menos uno igual a ' . $x - 1 . ', o eso espero', '<br>';
// ya que se evalúa como: (('x menos uno igual a ' . $x) - 1) . ', o eso espero'

// La precedencia deseada se puede forzar con paréntesis:
echo 'x menos uno igual a ' . ($x - 1) . ', o eso espero', '<br>';

// Otra forma:
echo 'x menos uno igual a ', $x - 1, ', o eso espero', '<br>';
