<?php

$var = 'Roberto';
$Var = 'Juan';
echo "$var, $Var";      // imprime "Roberto, Juan"

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

//$4site = 'aun no';      // inválido; comienza con un número
$_4site = 'aun no';       // válido; comienza con un carácter de subrayado
$täyte = 'mansikka';      // válido; 'ä' es ASCII (Extendido) 228

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$foo = 'Bob';                // Asigna el valor 'Bob' a $foo
$bar = &$foo;                // Referenciar $foo vía $bar.
$bar = "Mi nombre es $bar";  // Modifica $bar...
echo $bar, '<br>';
echo $foo, '<br>';           // $foo también se modifica.

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

var_dump($variable_indefinida);
