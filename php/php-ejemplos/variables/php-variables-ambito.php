<?php

$a = 1; // ámbito global
function test()
{
    echo $a; // referencia a una variable del ámbito local
}
test();

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = 1;
$b = 2;
function Suma()
{
    global $a, $b;
    $b = $a + $b;
}
Suma();
echo $b;

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$a = 1;
$b = 2;
function Suma2()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
Suma2();
echo $b;

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function prueba()
{
    echo $_SERVER['HTTP_HOST'], '<br>';
    echo $_SERVER['SCRIPT_NAME'], '<br>';
}
prueba();
