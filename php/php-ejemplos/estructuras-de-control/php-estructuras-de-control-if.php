<?php

$a = 10;
$b = 5;

if ($a > $b) echo 'a es mayor que b', '<br>';

if ($a > $b) {
    echo 'a es mayor que b', '<br>';
    $b = $a;
}

if ($a > $b) {
    echo 'a es mayor que b', '<br>';
} else {
    echo 'a NO es mayor que b', '<br>';
}

if ($a > $b) {
    echo 'a es mayor que b', '<br>';
} elseif ($a == $b) {                         // también se puede escribir 'else if'
    echo 'a es igual que b', '<br>';
} else {
    echo 'a es menor que b', '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Sintaxis alternativa
if ($a > $b) :
    echo $a . ' es mayor que ' . $b, '<br>';
elseif ($a == $b) :                             // no se permite 'else if'
    echo $a . ' igual ' . $b, '<br>';
else :
    echo $a . ' no es ni mayor que ni igual a ' . $b, '<br>';
endif;
