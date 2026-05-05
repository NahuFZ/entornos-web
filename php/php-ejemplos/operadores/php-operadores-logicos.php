<?php

/*
$a and $b    And (y)            TRUE si tanto $a como $b son TRUE.
$a or $b     Or  (o inclusivo)  TRUE si cualquiera de $a o $b es TRUE.
$a xor $b    Xor (o exclusivo)  TRUE si $a o $b es TRUE, pero no ambos.
!$a          Not (no)           TRUE si $a no es TRUE.
$a && $b     And (y)            TRUE si tanto $a como $b son TRUE.
$a || $b     Or  (o inclusivo)  TRUE si cualquiera de $a o $b es TRUE.
*/

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// "||" tiene una precedencia mayor que "or"
// El resultado de la expresión (false || true) es asignado a $e
// Actúa como: ($e = (false || true))
$e = false || true;
// La constante false es asignada a $f y entonces true es ignorado
// Actúa como: (($f = false) or true)
$f = false or true;
echo var_dump($e, $f), '<br>';

// "&&" tiene una precedencia mayor que "and"
// El resultado de la expresión (true && false) es asignado a $g
// Actúa como: ($g = (true && false))
$g = true && false;
// La constante true es asignada a $h y entonces false es ignorado
// Actúa como: (($h = true) and false)
$h = true and false;
echo var_dump($g, $h), '<br>';
