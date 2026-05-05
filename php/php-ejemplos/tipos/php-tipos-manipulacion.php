<?php

$foo = "0";                           // $foo es string (ASCII 48)
$foo += 2;                            // $foo es ahora un integer (2)
$foo = $foo + 1.3;                    // $foo es ahora un float (3.3)
$foo = 5 + "10 Cerditos pequeñitos";  // $foo es integer (15)
$foo = 5 + "10 Cerdos pequeños";      // $foo es integer (15)
echo $foo;

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$foo = 10;              // $foo es un integer
$bar = (bool) $foo;     // $bar es un boolean
var_dump($bar);

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$foo = 10;            // $foo es un integer
$str = "$foo";        // $str es un string
$fst = (string) $foo; // $fst es también un string

// Esto muestra que "son lo mismo"
if ($fst === $str) {
    echo "son lo mismo";
}
