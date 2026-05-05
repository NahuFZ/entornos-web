<?php

$i = 1;
while ($i <= 10) {
    echo $i++, '<br>';  // el valor presentado sería $i antes del incremento
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

// Sintaxis alternativa
$i = 1;
while ($i <= 10) :
    echo $i++, '<br>';
endwhile;
